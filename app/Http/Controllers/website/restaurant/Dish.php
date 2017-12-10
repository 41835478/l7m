<?php

namespace App\Http\Controllers\website\restaurant;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Repositories\website\dish_rate\DishRateContract as rDishRate;

use App\Repositories\website\dish\DishContract as rDish;

class Dish extends Controller
{
    private $rDishRate;

    public function __construct(rDishRate $rDishRate)
    {
                $this->rDishRate = $rDishRate;

    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rDish $rDish)
    {

        $oResults=[];

        $request->merge(['getAllRecords'=>1]);
        if(isset($request->type) && $request->type=="mostSelling"){
            $oResults=$rDish->getMostSellingDish($request);
        }else{

            $oResults=$rDish->getByFilter($request);
        }

        return view('website.restaurant.dish',compact('request','oResults'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,rDish $rDish,rDishRate $rDishRate,Request $request)
    {
        $dish=$rDish->show($id);
        if($dish->quantity > 0 ) {
            $availabel="in stock";
        }else {
             $availabel="out of stock";
        }

 $dish_rate = $this->rDishRate->getByFilter([
            'dish_id' => $id,
            'status' => config('array.dish_rate_status_accepted_index')
        ]);


    return view("website.restaurant.dish_show",['dish'=>$dish,'availabel'=>$availabel,'dish_rate'=>$dish_rate,'request'=>$request]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {

    }


}
