@extends('website.layouts.inner')
@section('title', Lang::get('website.allrestaurants'))
@section('content')

 @include('website.partials.innerSearch',['title'=>trans('website.shopping'),'img'=>'/assets/website/images/add_new_shop.png','icon'=>'fa fa-list','title2'=>trans('website.shoppingCart')])



<!-- <article class="container">
      <div class="inn_caption">
        <h2>Shopping Cart</h2>
      </div>
    </article> -->









 <section class="inner-wrapper">
    <article class="container">
      <div class="content_wrapper">
       <!--  <div class="captions_sec">
          <div class="icon_in"><img src="/asstes/website/images/add_new_shop.png" alt=""></div>
          <h2>Shopping Cart</h2>
          <h6>To join our corporation, please fill in the forms below and we will contact you as soon as possible</h6>
        </div> -->








@if(count($oOrders))

    @foreach($oOrders as $oOrder)
  {{--*/ $total=0; $order_id=0;/*--}}

        <div class="oneOrder" id="oneOrder_{{$oOrder->id}}">

            {{-- #order ( #{{$oOrder->id}} ) <a href="/shop/menuItem?resturant={{$oOrder->resturant}}" >trans('website.continue') }} ...</a> --}}


    @if($oOrder->cart)   <h4 > <strong style="padding-left: 17px"> {{isset( $oOrder->restaurant->name_en)?$oOrder->restaurant->name_en:'' }} Orders: </strong> </h4>
    <br>
<hr>
        @foreach($oOrder->cart as $cart)










      <section class="sub-wrapper">
          <div class="add-new-shop-wrap">
            <div class="shopping-cart">
              <table>
                <thead>
                  <tr>
                    <th width="9%">&nbsp;</th>
                    <th width="36%">Product</th>
                    <th width="15%">Price</th>
                    <th width="15%">Quantity</th>
                    <th width="15%">Total</th>
                    <th width="10%">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td width="9%"><img src="{{$cart->dish->img}}" width="83" height="81" alt="img"></td>
                    <td width="36%">{{$cart->dish->name_en}}</td>
                    <td width="15%">{{$cart->dish->price}} KWD</td>
                    <td width="20%">
                    <!--Quantity-->
                    <div class="sp-quantity" style="display: inline;">
    <div class="sp-minus fff"> <a class="ddd" href="#/home">-</a>
    </div>
    <div class="sp-input">

{!! Form::model($cart, [
                                                                    'method' => 'PATCH',
                                                                    'url' => ['/cart', $cart->id],
                                                                    'class' => 'form-horizontal right1'
                                                                ]) !!}
                                                             
        <input type="text" class="quntity-input" value="{{$cart->quantity}}" name="quantity" />
    </div>
    <div class="sp-plus fff"> <a class="ddd" href="#/home">+</a>
    </div>


</div>







<button type="submit" style="width:50px; height:40px;padding:0px; margin:0px;float:right;"><i class="fa fa-refresh"></i></button>
                                                              {!! Form::close() !!}
                    </td>
                    <td width="15%">{{($cart->unit_price * $cart->quantity ) *1}} KWD</td>
                    <td width="10%" align="center" valign="middle"> <a href="/cart/delete/{{$cart->id}}"><b>X</b></a></td>
                  </tr>
                </tbody>
              </table>
              
       









        <br>
    {{--*/ $total+=$cart->unit_price * $cart->quantity; $order_id=$oOrder->id;/*--}}
        
                   @endforeach
                   

                   <div class="row">
                <aside class="col-md-12">
                  <div class="shopping-cart-total">GRAND TOTAL</div>
                  <div class="shopping-cart-price">{{$total}} KWD</div>
                </aside>
              </div>
         <div class="row subt_btn_space">
                <aside class="col-md-7 col-sm-7">
                  <button onClick="window.location.assign('/restaurant');" class="cap-box-light-gray pull-left"><h3>CONTINUE SHOPPING</h3></button>
                <!--   <button onClick="#" class="cap-box-light-gray pull-left"><h3>UPDATE</h3></button> -->
                </aside>
                <aside class="col-md-5 col-sm-5">
                  <button onclick="window.location.href='/order?order_id={{$oOrder->id}}'" class="cap-box-red pull-right"><h3>Place Order</h3></button>
                </aside>
              </div>
            </div>
          </div>
        </section>
        
        <!--<div class="pager_sec">
			<ul>
				<li><a href="#"><span class="fa-angle-left"></span></a></li>
				<li><a href="#" class="active">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#"><span class="fa-angle-right"></span></a></li>
				
			</ul>
		</div>--> 
    @endif




             <!-- <h2>{{ trans('website.TOTAL') }} <span><b class="orderTotal">0.00</b> {{trans('website.kd')}}</span></h2> -->
</div><!-- /.gray_drop -->


   
@endforeach
  </div>
    </article>
  </section>
    @else


 <h3 style="text-align:center;">  Your cart is empty. Click <a href="/"> here</a> to continue ordering.</h3>
</div>
    </article>
  </section>
@endif

@stop



