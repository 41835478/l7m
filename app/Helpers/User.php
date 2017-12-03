<?php

namespace App\Helpers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\File;

use App\Models\Users as mUsers;

use Illuminate\Http\Request;

class User {

    private static $oUser = null;


    public function __construct() {

        if(self::$oUser !=null){return $this;}

       $request=new Request();
        $user=null;
        if ($user = Sentinel::check())
        {
            // User is logged in and assigned to the `$user` variable.
        }
        elseif($request->has('token'))
        {
            $activation=\DB::table('activations')->where('code','=',$request->get('token'))->first();
           $user=mUsers::find($activation->user_id);
        }
        self::$oUser = $user;
    }

    public function getUser() {
        return self::$oUser;
    }

    public function getAvatar() {
        if (is_null(self::$oUser->avatar)) {
            return File::get(public_path() . '/assets/'.config('project.layoutAssetsFolder').'/img/avatar');
        }
        return self::$oUser->avatar;
    }

    public function getFirstName() {
        return self::$oUser->first_name;
    }

    public function getLastName() {
        return self::$oUser->last_name;
    }

    public function getName() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    public function getRestaurant(){
        $oRestaurants=\App\Models\RestaurantUsers::where(['users_id'=>current_user()->getUser()->id])
            ->where('restaurant_id' ,'>',0)->get();
        $ids=[];
        foreach($oRestaurants as $oRestaurant){
            $ids[]=$oRestaurant->restaurant_id;

        }

/*______________--branch_restaurant*/
        $oBranchRestaurants=\App\Models\Restaurant::whereIn('branch',$ids)->get();

        foreach($oBranchRestaurants as $branch){
            $ids[]=$branch->id;

        }
 /*__________End____--branch_restaurant*/

        return $ids;
    }

    public function getRestaurantOrder(){
        $oRestaurantOrders=\App\Models\Order::whereIn('restaurant_id',$this->getRestaurant())->get();
        $ids=[];
        foreach($oRestaurantOrders as $oRestaurantOrder){
            $ids[]=$oRestaurantOrder->id;

        }

        return $ids;
    }


    public function getServiceCompany(){
        $oServiceCompanys=\App\Models\ServiceBoy::where(['users_id'=>current_user()->getUser()->id])
            ->orWhere('manager_id' ,'=',current_user()->getUser()->id)->get();
        $ids=[];
        foreach($oServiceCompanys as $oServiceCompany){
            $ids[]=$oServiceCompany->service_company_id;

        }
        return $ids;
    }

    public function getOwnServiceCompany(){
        $oServiceCompanys=\App\Models\ServiceCompany::where(['manager_id'=>current_user()->getUser()->id])
            ->get();
        $ids=[];
        foreach($oServiceCompanys as $oServiceCompany){
            $ids[]=$oServiceCompany->id;

        }
        return $ids;
    }

    public function getTotalOrderNumber(){
        $oOrder=\App\Models\Order::where('users_id','=',current_user()->getUser()->id)
            ->where('status','!=',config('array.order_status_pending_index'))->count();

        return $oOrder;
    }



    public function greatGestUser()
    {

        $credentials = [

            'email' => 'guest_' . rand(99999, 99999999) . '_' . rand(99999, 99999999) . '@cofe.com',
            'password' => rand(99999, 99999999) . '_' . rand(99999, 99999999),
            'type' => config('array.users_type_guest_index'),
            'first_name'=>'guest',
            'last_name'=>'guest'

        ];

        $user = Sentinel::registerAndActivate($credentials);

        $role = Sentinel::findRoleByName('client');
        $role->users()->attach($user);


        $role2 = Sentinel::findRoleByName('guest');
        $role2->users()->attach($user);
        $mUsers=mUsers::find($user->id);$mUsers->update(['type'=> config('array.users_type_guest_index')]);
        Sentinel::login($user);

    }

    public function role(){
        $roles=\Sentinel::findById($this->getUser()->id)->roles;

        $rolesArray=[];
        if(count($roles)){
            foreach($roles as $role){
                $rolesArray[$role->id]=$role->slug;
            }
        }

        return $rolesArray;
    }

}
