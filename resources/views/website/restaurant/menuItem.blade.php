@extends('website.layouts.inner')
@section('title', Lang::get('website.order'))
@section('content')

    {{--@include('website.partials.innerSearch',['title'=>trans('website.menuIteminfo').'<br><span>'.trans('website.detailsinfo').'</span>','img'=>'/assets/website/images/current_order.png','icon'=>'fa fa-list','request'=>$request])--}}

<style type="text/css">
    .col-sm-3{
        float: right !important;
    }
    .color-black{color: black}

</style>

    <article class="container">
        <div class="inn_caption">
            <h2>Dishes </h2>
        </div>
    </article>


@if(false)

    <section class="inner_content_area">
        <div class="container">
            <div class="col-sm-9">
                @include('common.partials.messages')
                <div class="rest-name clearfix">
                    <h5 class="new-style">{{trans('website.restaurantMenu')}}</h5>

                    <section>
                        <img src="{{$oRestaurant->img }}" alt="" style="width:130px;height:120px;">
                        <h2>{{$oRestaurant->{'name_'.config('app.locale')} }}</h2>
                        <div class="stars_main"> <div id="stars"  data-stop="{{ (config('module.restaurant_rate') ==config('module.restaurant_rate_active_index'))? 'false':'true' }}"  data-id="{{$oRestaurant->id}}"  data-model="restaurant" data-rating="{{$oRestaurant->rating}}" class="starrr"></div> </div>
                    </section>
                </div>
                <h5 class="new-style">{{trans('website.mostSelling')}}</h5>
                <div class="row">

                    @if(count($oResults))
                    @foreach($oResults as $oResult)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        {!! Form::open(['route'=>'order.create','method'=>'get','class'=>'xxx_ajaxForm']) !!}
                        <div class="res_list">
                            <img src="{{$oResult->img }}" alt="restaurant">
                            <div class="res_content">
                                <h3>{{$oResult->{'name_'.config('app.locale')} }}</h3><br>
                                <h4>{{$oResult->{'description_'.config('app.locale')} }}</h4>
                                <div class="stars_main"> <div id="stars"  data-id="{{$oResult->id}}"  data-model="dish" data-rating="{{$oResult->rating}}"class="starrr"></div> </div>
                                <hr>
                                <label class="qnty clearfix">

                                    <span style="font-size: 12px;"> {{trans('website.price')}} :{{$oResult->price }}  {{trans('website.kd')}}</span>
                                    <input class="form-control" type="text" name="quantity" placeholder="1" >

                                    
                                </label>

                                <button type="submit" class="btn btn-primary">{{trans('website.order')}}</button>
                            </div>
                        </div>
                        {!! Form::hidden('dish_id',$oResult->id) !!}
                        {!! Form::close() !!}
                    </div>
                    @endforeach
                    @else
                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>
                    @endif



                </div>
            </div>
            <div class="col-sm-3" style="float: right;">
                <div class="food-court">
                    <h4>{{trans('website.sahalatFoodCourt')}}</h4>
                    <center>
                        <img src="{{$oRestaurant->img }}" alt=""  style="max-width:100%; height:120px;"><br>
                        {{trans('website.minimumOrderAmount')}} :  <strong>{{trans('website.kd')}} {{$oRestaurant->min_amount }}</strong>
                        <hr>


                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>

                            {{--*/ $total=0; $order_id=0;/*--}}
                            @if(count($oOrderResults))
                                @foreach($oOrderResults as $oOrderResult)
                                    @foreach($oOrderResult->cart as $cart)
                            <tr class="headerTr">
                                <td colspan="2" align="left">{{$cart->dish->{'name_'.config('app.locale')} }}</td>
                                <td align="right"><strong>{{$cart->unit_price}} {{trans('website.kd')}}</strong></td>
                            </tr>
                            <tr>
                                <td rowspan="2"><img src="{{$cart->dish->img }}" width="50" alt=""></td>
                                <td align="left">{{trans('website.quantity')}}</td>
                                <td align="right"><strong>{{$cart->quantity}}</strong> 

                                 <a href="/cart/delete/{{$cart->id}}"><b>X</b></a>


                                </td>

                            </tr>
                            <tr>
                                <td align="left">{{trans('website.total')}}</td>
                                <td align="right"><strong>{{ $cart->unit_price * $cart->quantity}} {{trans('website.kd')}} </strong></td>
                            </tr>

                            {{--*/ $total+=$cart->unit_price * $cart->quantity; $order_id=$oOrderResult->id;/*--}}

                                    @endforeach
                                @endforeach
                                @endif


                            <tr class="grnt-totl3">
                                <td colspan="2">  {{trans('website.grandTotal')}}</td>
                                <td><strong>{{$total}} {{trans('website.kd')}}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center">
                                    <!-- <a href="/restaurant/menuItem?restaurant_id={{$oRestaurant->id }}" class="btn btn-primary">{{trans('website.addMore')}}</a> --><br>

                                    @if(isset(current_user()->getUser()->id))
                                        
                                      @if(current_user()->getUser()->type !=config('array.users_type_guest_index'))
                                         @if($order_id > 0)
                                              <a href="/order?order_id={{ $order_id }}" class="btn btn-info"> {{trans('website.placeOrder')}}</a>
                                         @endif  
                                      @else
                                    
                                          <a data-toggle="modal" data-target="#myModall" href="#" class="btn btn-info">{{trans('website.placeOrder')}}</a>
                                       @endif
                                    @endif
                                    </div>
                                </td>
                            </tr>

                                    <div id="myModall" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="">Please Select Option </h4>
      </div>
      <div>
            <button type="button" class="btn btn-default" data-dismiss="modal"  role="button" style="border: none; text-decoration-color: white;"><a data-toggle="modal" data-target="#myModal2" href="#" style="text-decoration: none; ">Login and proceed to checkout</a></button>
      </div>
      <div>
         <a onclick="window.location='/users/create?order_id={{ $order_id }}';" class="btn btn-default" style="border: none;"> Create New Account</a>
           
               
      </div>
      <div>
         <a onclick="window.location='/recover';" class="btn btn-default" style="border: none;" onmouseover="this.style.backgorund=none;">Forgot Password</a>
      </div>    

     <!-- @if(isset(current_user()->getUser()->id) && current_user()->getUser()->type ==config('array.users_type_guest_index')) -->
        <div>
          @if($order_id > 0)
            <!-- <a onclick="window.location='/order?order_id={{ $order_id }}" class="btn btn-default" style="border: none;" onmouseover="this.style.backgorund=none;">{{trans('website.placeOrder')}}</a> -->
            <a href='/order?order_id={{ $order_id }}' class="btn btn-default" style="border: none;" onmouseover="this.style.backgorund=none;"> Continue as Guest</a>
          @endif
         </div>
     <!-- @endif -->
            
           
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>






















                            </tbody>
                        </table>

                    </center>
                </div>
            </div>
        </div>


    </section>






<!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{trans('website.login')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">

                            {!! Form::open(['route'=>'client.auth.login','class'=>'ajaxForm']) !!}
                            <fieldset>
                                <div class="form-group clearfix">
                                    <label class="head">{{trans('website.userName')}}<span class="reqrd">*</span></label>
                                    <input class="form-control" placeholder="{{trans('website.email')}}" name="email" type="text">
                                </div>
                                <div class="form-group clearfix">
                                    <label class="head">{{trans('website.password')}} <span class="reqrd">*</span></label>
                                    <input class="form-control" placeholder="{{trans('website.password')}}" name="password" type="password" value="">
                                </div>
                                <div class="checkbox clearfix">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> {{trans('website.staySignedIn')}} | <a href="/recover"> {{trans('website.forgotYourPassword')}}.</a>
                                    </label>
                                </div>




                                <center><button type="submit" class="btn btn-primary">{{trans('website.login')}}</button></center>
                            </fieldset>
                        {!! Form::close() !!}
                        <center>
                        <a class="btn btn-primary" style="color:#ffffff;" href="/google-login">{{trans('website.googleSignIn')}}</a>
                        <a class="btn btn-primary" style="color:#ffffff;"  href="/linkedin-login">{{trans('website.linkedinSignIn')}}</a>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>









    @endif


    <section class="inner-wrapper">
        @include('common.partials.messages')

        <article class="container">
            <div class="content_wrapper">
                <div class="captions_sec">
                    <div class="icon_in"><img src="images/shop-icon.png" alt=""></div>
                    <h2>Welcome To Our Dishs</h2>
                    <h6>Lorem Ipsum is simply dummy text of the printing</h6>
                </div>
                <section class="mostselling-listing">
                    <div class="row mostsellingwrap">
                        @if(count($oResults))
                            @foreach($oResults as $oResult)
                        <aside class="col-md-4">
                            <div class="most_selling_dt"> <img src="{{$oResult->img}}" alt="">
                                <div class="most_selling_dt_text">
                                    <h3><a href="/dish/{{$oResult->id}}" class="color-black">{{$oResult->name_en}}</a> </h3>
                                    <p>Fresh Meat Start Price:</p>
                                    <div class="price">{{$oResult->price}} KD <span>{{ isset($oResult->price_befor)? $oResult->price_befor:''}} </span></div>
                                    <div class="icon_stars"> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> </div>
                                    <div class="btn_dt">


                                        <div class="sp-quantity2">
                                            <div class="sp-minus2 fff"> <a class="ddd" href="#/home">-</a> </div>
                                            <div class="sp-input2">
                                                <input type="text" class="quntity-input" value="1" />
                                            </div>
                                            <div class="sp-plus2 fff"> <a class="ddd" href="#/home">+</a> </div>
                                        </div>
                                        <div class="cap-box">
                                            <h2><a href="#"> <img src="images/cart-icon.png"> ADD TO CART </a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>

@endforeach

                            @endif



                    </div>
                </section>
            </div>
        </article>
    </section>



















@stop