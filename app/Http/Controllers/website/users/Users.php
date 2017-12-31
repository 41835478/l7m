<?php

namespace App\Http\Controllers\website\users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use Illuminate\Http\JsonResponse;

use App\Http\Requests\website\users\createRequest;
use App\Http\Requests\website\users\editRequest;
use App\Http\Requests\website\users\resetForgetPassword;

use App\Repositories\website\users\UsersContract as rUsers;
use App\Repositories\website\area\AreaContract as rArea;
use App\Repositories\website\address\AddressContract as rAddress;
use App\Repositories\website\order\OrderContract as rOrder;


use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class Users extends Controller
{


    public function __construct()
    {
    }


    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request, rUsers $rUsers, rAddress $rAddress, rOrder $rOrder, rArea $rArea)
    {
        $oUsers = $rUsers->show(current_user()->getUser()->id);
        $request->merge(['users_id' => current_user()->getUser()->id]);


        $oAddress = [];
        if (isset($request->selected_address_id)) {
            $oAddress = $rAddress->show($request->selected_address_id);
        }


        $oAddressResults = $rAddress->getByFilter($request->all());
        $oOrderResults = $rOrder->getByFilter($request->all());

        $areaList = $rArea->getAllList($request);
        return view('website.users.account',
            compact('request', 'oUsers', 'oAddressResults', 'oOrderResults', 'oAddress', 'areaList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request, rArea $rArea)
    {
        
        $areaList = $rArea->getAllList();
        
        return view('website.users.create', compact('request', 'areaList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request, rUsers $rUsers, rAddress $rAddress ,rOrder $rOrder)
    {

            if($request->password == ''){
                $tempRequest=$request->except(['password']);
            }else{
                $request->merge(['password'=>password_hash($request->password,PASSWORD_DEFAULT)]);
                $tempRequest=$request;
            }


        $user = Sentinel::registerAndActivate($request->all());
        $rUsers->update($user->id, $request,$tempRequest);
        $request->merge(['users_id' => $user->id]);
        $request->mobile = $request->address_mobile;
        $request->phone = $request->address_phone;
        $oResults = $rAddress->create($request->all());

        Sentinel::login($user);

         if(isset($request->order_id)){
            $rOrder->update($request->order_id,['users_id'=>$user->id]);
            //return Redirect::to( '/order?order_id='.$request->order_id);
        }


        if ($request->ajax()) {

            $activation=\DB::table('activations')->where('user_id','=',$user->id)->first();
            return new JsonResponse(['status' => 'success','role'=>current_user()->role(),'token'=>$activation->code, 'redirect' => route('users.index')], 200);
        } else {
            return redirect(route('users.index'));
        }






        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function edit($id)
    {
       
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function update($id, editRequest $request, rUsers $rUsers)
    {
        $id = current_user()->getUser()->id;
      

        $tempRequest=$request;

            if($request->password == ''){
                $tempRequest=$request->except(['password']);
            }else{
                $request->merge(['password'=>password_hash($request->password,PASSWORD_DEFAULT)]);
                $tempRequest=$request;
            }

       $result = $rUsers->update($id, $tempRequest);


        if ($request->ajax()) {
            return new JsonResponse(['status' => 'success'], 200);
        } else {
          return redirect('/users');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function destroy($id)
    {

    }


public function getLogin()
    {

        return view('website.users.signIn')
            ->with('random', rand(1, 3));
    }

    public function postLogin(Request $oRequest)
    {


        try {
            if(isset($oRequest->token)){

                $oCodeUserId=DB::table('activations')->where('code','=',$oRequest->token)->first();

                $oUser = Sentinel::findById($oCodeUserId->user_id);

                Sentinel::login($oUser);

            }else{

                $oUser = Sentinel::authenticate([
                    'email' => $oRequest->email,
                    'password' => $oRequest->password,
                ]);
            }

            $permissions='';
            $deny_permissions='';
            if(isset($oUser->roles ) && count($oUser->roles )){
            foreach($oUser->roles as $role){
                $permissions.=$role['attributes']['permissions'];
                $deny_permissions.=$role['attributes']['deny_permissions'];
            }
            }
            \Session::set('permissions',$permissions);
            \Session::set('deny_permissions',$deny_permissions);
        } catch (ThrottlingException $e) {

        } catch (NotActivatedException $e) {

        } catch (Exception $e) {
            return Redirect::route('website.users.signIn')->withErrors([trans('user.InvalidLogin')]);
        }
   if($oRequest->ajax() && !isset($oUser->id)){

            return new JsonResponse(['status' => 'error','messages'=>'Login Failed. Either your Email/password is incorrect.'], 422);

        }



        if(isset($oRequest->device_id) || isset($oRequest->ios_device_id)  ){
            $devicesArray=[];

            if(isset($oRequest->device_id)){$devicesArray['android_device_id']=$oRequest->device_id;}
            if(isset($oRequest->ios_device_id)){$devicesArray['ios_device_id']=$oRequest->ios_device_id;}
 
            if(count($devicesArray)){
                DB::table('users')->where('id','=',$oUser->id)->update($devicesArray);
            }
        }

    
        if($oRequest->ajax()){

            $oCode=DB::table('activations')->where('user_id','=',$oUser->id)->first();
            $userRestaurantStatus=\App\Models\RestaurantUsers::where('status','!=',config('array.restaurant_users_status_offline_index'))
                ->where('users_id','=',$oUser->id)->first();

            return new JsonResponse([
                'status'=>'success',
                'user_id'=>$oUser->id,
                'role'=>current_user()->role(),
                'token'=>$oCode->code,
                'user_status'=>count($userRestaurantStatus)?  config('array.restaurant_users_status_online_index'):config('array.restaurant_users_status_offline_index'),
                'user'=>current_user()->getUser(),
                'redirect'=>route('users.index')]);exit();
        }else {
            return Redirect::route('restaurant.index');
            // return Redirect::intended($this->userAfterLoginPage());
        }


    }

// public function userAfterLoginPage(){
//         if(\Sentinel::inRole('driver') || \Sentinel::inRole('dispatcher')){

//             return route('admin.order_driver.index');
//         }elseif(\Sentinel::inRole('service-company-manager') ){

//             return route('admin.service_company.index');
//         }elseif(\Sentinel::inRole('service-boy')){

//             return route('admin.service_company_order.index');
//         }else{



//             return route('dashboard.index');
//         }

//     }


}
