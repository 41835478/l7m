<?php

namespace App\Http\Controllers\website\cart;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\cart\createRequest;
use App\Http\Requests\website\cart\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use App\Repositories\website\order\OrderContract as rOrder;

use App\Models\Cart as mCart;
use App\Repositories\website\cart\CartContract as rCart;


class Cart extends Controller
{
    private $rCart;
 private $rOrder;
    public function __construct(rCart $rCart,rOrder $rOrder)
    {
        $this->rCart=$rCart;    $this->rOrder = $rOrder;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rOrder $rOrder,rCart $rCart)
    {

                $oOrderResults=[];
if(isset(current_user()->getUser()->id)) {
    $request->merge(['users_id' => current_user()->getUser()->id, 'restaurant_id' => $request->restaurant_id, 'status' => config('array.order_status_pending_index')]);
    $oOrderResults = $rOrder->getByFilter($request->except('id'));
}












 $filterData = [];

        if (isset($request->order_id)) {
            $filterData['id'] = $request->order_id;
        } else {

            $filterData['status'] = config('array.order_status_pending_index');
            $filterData['users_id'] = (isset(current_user()->getUser()->id)) ? current_user()->getUser()->id : 0;
           $filterData['isParent'] = 1;

        }
        $oOrders = $this->rOrder->getByFilter($filterData);

//        dd($oOrders);

        if ($request->ajax() && isset($request->getQuantity)) {

            $total = 0;
            foreach ($oOrders as $oOrder) {

                foreach ($oOrder->cart as $cart) {
                    $total += $cart->quantity;
                }
            }

            return new JsonResponse(['status' => 'success', 'quantity' => $total], 200);
        }


        // $giftCards = $rGiftCardUsers->getByFilter(['users_id' => isset(current_user()->getUser()->id) ? current_user()->getUser()->id : 0, 'status' => [config('array.gift_card_users_status_pending_index')]]);









return view('website.cart.index',compact('oOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


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


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,Request $request)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, Request $request)
    {
if($request->quantity < 1){$request->quantity  =1;}
        $result=$this->rCart->update($id,$request);

        return Redirect::back();
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
        $cart=$this->rCart->destroy($id);
        return Redirect::back();
    }


}
