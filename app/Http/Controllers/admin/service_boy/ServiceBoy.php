<?php

namespace App\Http\Controllers\admin\service_boy;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\admin\service_boy\createRequest;
use App\Http\Requests\admin\service_boy\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ServiceBoy as mServiceBoy;
use App\Repositories\admin\service_boy\ServiceBoyContract as rServiceBoy;

 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\service_company\ServiceCompanyContract as rServiceCompany;

class ServiceBoy extends Controller
{
    private $rServiceBoy;

    public function __construct(rServiceBoy $rServiceBoy)
    {
        $this->rServiceBoy=$rServiceBoy;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rServiceCompany $rServiceCompany,rUsers $rUsers)
    {


        $oResults=$this->rServiceBoy->getByFilter($request);
         $serviceCompanyList=$rServiceCompany->getAllList();
         $usersList=$rUsers->getAllList();
        return view('admin.service_boy.index', compact('oResults','request','usersList','serviceCompanyList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers,rServiceCompany $rServiceCompany)
    {

$usersList=$rUsers->getAllList();
$serviceCompanyList=$rServiceCompany->getAllList();

        return view('admin.service_boy.create',compact('request','usersList','serviceCompanyList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rServiceBoy->create($request->all());

        return redirect('admin/service_boy');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request)
    {


        $service_boy=$this->rServiceBoy->show($id);
      $request->merge(['service_boy_id'=>$id,'page_name'=>'page']);



        return view('admin.service_boy.show', compact('service_boy','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers,rServiceCompany $rServiceCompany)
    {


        $service_boy=$this->rServiceBoy->show($id);


 $usersList=$rUsers->getAllList();
 $serviceCompanyList=$rServiceCompany->getAllList();
        return view('admin.service_boy.edit', compact('service_boy','usersList','serviceCompanyList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request)
    {

        $result=$this->rServiceBoy->update($id,$request);

        return redirect('admin/service_boy');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function updateUserStatus(Request $request)
    {

       $serviceBoyUpdateResult= mServiceBoy::where('users_id','=',$request->users_id)->update(['status'=>$request->status]);

        return new JsonResponse(['status'=>'success'],200);

    }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getUserStatus(Request $request)
    {

        $userStatus=mServiceBoy::where('status','!=',config('array.service_boy_status_offline_index'))
            ->where('users_id','=',$request->users_id)->first();

        $status=count($userStatus)?  config('array.service_boy_status_online_index'):config('array.service_boy_status_offline_index');

        return new JsonResponse(['status'=>$status],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function destroy($id)
    {
        $service_boy=$this->rServiceBoy->destroy($id);
        return redirect('admin/service_boy');
    }


}
