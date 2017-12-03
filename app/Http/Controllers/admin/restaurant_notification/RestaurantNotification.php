<?php

namespace App\Http\Controllers\admin\restaurant_notification;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\restaurant_notification\createRequest;
use App\Http\Requests\admin\restaurant_notification\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\RestaurantNotification as mRestaurantNotification;
use App\Repositories\admin\restaurant_notification\RestaurantNotificationContract as rRestaurantNotification;


 use App\Repositories\admin\restaurant\RestaurantContract as rRestaurant;

class RestaurantNotification extends Controller
{
    private $rRestaurantNotification;

    public function __construct(rRestaurantNotification $rRestaurantNotification)
    {
        $this->rRestaurantNotification=$rRestaurantNotification;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rRestaurant $rRestaurant)
    {

        $statistic=null;
        $oResults=$this->rRestaurantNotification->getByFilter($request,$statistic);
         $restaurantList=$rRestaurant->getAllList();
        return view('admin.restaurant_notification.index', compact('oResults','request','statistic','restaurantList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rRestaurant $rRestaurant)
    {

$restaurantList=$rRestaurant->getAllList();

        return view('admin.restaurant_notification.create',compact('request','restaurantList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rRestaurantNotification->create($request->all());

        return redirect('admin/restaurant_notification');
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


        $restaurant_notification=$this->rRestaurantNotification->show($id);
      $request->merge(['restaurant_notification_id'=>$id,'page_name'=>'page']);



        return view('admin.restaurant_notification.show', compact('restaurant_notification','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rRestaurant $rRestaurant)
    {


        $restaurant_notification=$this->rRestaurantNotification->show($id);


 $restaurantList=$rRestaurant->getAllList();
        return view('admin.restaurant_notification.edit', compact('restaurant_notification','restaurantList'));
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

        $result=$this->rRestaurantNotification->update($id,$request);

        return redirect('admin/restaurant_notification');
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
        $restaurant_notification=$this->rRestaurantNotification->destroy($id);
        return redirect('admin/restaurant_notification');
    }


}
