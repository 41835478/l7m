@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    {{--@include('website.partials.innerSearch',['title'=>' '.trans('website.restaurant').' <br><span>'.$restaurant->{'name_'.config('app.locale')}.'</span>','img'=>'/assets/website/images/add-ico.png','icon'=>'fa fa-list','title2'=>trans('website.titles')])--}}
<!--,'title2'=>trans('website.signForm')-->

        <article class="container">
            <div class="inn_caption">
                <h2>SHOP DETAIL</h2>
            </div>
        </article>




    <style>


        .shop-detail{
            width: 50%;

        }


        .cust-btn{
            background-color: #a90017;
            color: white;

        }




    </style>

@if(false)

    <section class="inner_content_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-8 order-conform clearfix">
                            <section class="clearfix">
                                <div class="heading">{{ $restaurant->{'name_'.config('app.locale')}  }}</div>

                                <label>{{trans('website.location')}} <span class="reqrd">*</span></label>

                                {!! Form::model($request,['method'=>'get','id'=>'selectAreaForm']) !!}
                                {!! Form::select('selected_area_id',$restaurantAreaList,null,['class'=>'newstyle form-control','onchange'=>'$("#selectAreaForm").submit();']) !!}

                                {!! Form::close() !!}
                                <div class="tbl-cvr">
                                    <table width="100%" cellspacing="2" cellpadding="2" class="hotl-data">
                                        <tr>
                                            <td>{{trans('website.status')}} :</td>
                                            <td>{{config('array.restaurant_status')[$restaurant->status]}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('website.minimumAmount')}}  :</td>
                                            <td> {{ count($selected_area)? $selected_area->min_amount:$restaurant->min_amount }} {{trans('website.kd')}}</td>
                                        </tr>


                                        <tr>
                                            <td>{{trans('website.workingHours')}} :</td>
                                            <td> {{trans('website.from')}} :{{$restaurant->working_hour_from}} {{trans('website.to')}} :{{$restaurant->working_hour_to}} </td>
                                        </tr>





                                        <tr>
                                            <td>{{trans('website.deliveringHours')}} :</td>
                                            @if(count($selected_area))

                                                <td> {{trans('website.from')}}  :{{$selected_area->deliver_time_from}} {{trans('website.to')}} :{{$selected_area->deliver_time_to }}</td>
                                                @else
                                                <td>{{$restaurant->deliver_time_from}} to {{$restaurant->deliver_time_to }}</td>
                                                @endif
                                        </tr>
                                        {{--<tr>--}}
                                            {{--<td>Delivery Time:</td>--}}
                                            {{--<td>60 minutes</td>--}}
                                        {{--</tr>--}}
                                        <tr>
                                            <td>{{trans('website.deliveryCharges')}} :</td>
                                            <td> {{ count($selected_area)? $selected_area->delivery_charges:$restaurant->deliver_charge }} {{trans('website.kd')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('website.payment')}} :</td>
                                            <td><img src="/assets/website/images/visa.jpg"> <img src="/assets/website/images/master_card.jpg"> <img src="/assets/website/images/knet.jpg">  	</td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('website.rating')}}:</td>
                                            <td><div class="stars_main"> <div id="stars"  data-stop="{{ (config('module.restaurant_rate') ==config('module.restaurant_rate_active_index'))? 'false':'true' }}"   data-id="{{$restaurant->id}}"  data-model="restaurant" data-rating="{{$restaurant->rating}}" class="starrr"></div></td>
                                        </tr>
                                        <tr>
                                            <td> {{trans('website.cuisines')}}: </td>
                                            <td>

                                                @if(isset($restaurant->restaurant_cuisine) && count($restaurant->restaurant_cuisine))
                                                    @foreach($restaurant->restaurant_cuisine as $restaurant_cuisine)
                                                    {{$restaurant_cuisine->cuisine->{'name_'.config('app.locale')} }} .
                                                    @endforeach

                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" colspan="2">
                                                <a href="/restaurant/menuItem?restaurant_id={{$restaurant->id}}" class="btn btn-info btn-lg"> {{trans('website.showMenu')}}</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-4">
                            <div class="hotels-list">
                                <img src="{{$restaurant->img}}" alt="" style="display: block;margin:auto;border-radius:100%; width:150px;height:150px;">
                                <h4>{{trans('website.mostSellingDishes')}}</h4>
                               <ul>
                                   @foreach($mostSellingDishes as $dish_id=>$dish)
                                    <li><a href="/restaurant/menuItem?restaurant_id={{$restaurant->id}}&id={{$dish_id}}">{{$dish}}</a></li>
                                   @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


              <!--   @include('website.partials.asideMenu') -->





      @if(count($MenuSection))

<div class="col-sm-3">
        <section class="in-section">
            <h3> {{trans('website.menuesction')}} </h3>
            <ul>
             @foreach($MenuSection as $MenuSection)

                <li><a  href="/restaurant/menuItem?restaurant_id={{$restaurant->id}}">{{$MenuSection->{'name_'.config('app.locale')}       }}</a></li>
                
                 @endforeach

            </ul>
        </section>
    </div>
 @endif








            </div><!-- row-->
        </div>


    </section>



    @endif




            <!--inner content-->
    <section class="inner-wrapper">
        <article class="container">
            <div class="content_wrapper">
                <div class="captions_sec">
                    <div class="icon_in"><img src="/assets/website/images/shop-icon.png" alt=""></div>
                    <h2>{{ $restaurant->{'name_'.config('app.locale')}  }}</h2>
                    <h6>Dont Forgit Short Description</h6>
                </div>
                <section class="shop-listing">
                    <div class="row shop-detail-wrap">
                        <aside class="col-md-12">


                            <div class="shop-detail" style="width: 100%">
                                <div class="thumb"> <img src="{{$restaurant->img}}" alt=""> </div>
                            </div>

                           <!--  <div class="shop-detail">
                                <div class="address thumb inn_bx" style="background: #a90017">


                                </div>
                            </div> -->
                        </aside>
                    </div>
                    <div class="row shop-detail-wrap">
                        <aside class="col-md-12">
                            <div class="about-col">
                                <h3>About <span>shop</span></h3>
                           <p> {{$restaurant->{'description_'.config('app.locale')} }}  </p>
                            </div>
                        </aside>
                    </div>
                    <div class="row shop-detail-wrap">
                        <aside class="col-md-12">
                            <div class="time-chr-col">
                                <aside class="col-md-6 col-sm-6">
                                    <div class="text_col_lgt">
                                        <div class="icon"> <img src="/assets/website/images/time.png" width="61" height="61" alt="img"> </div>
                                        <h3>time deliver  &nbsp;&nbsp;&nbsp;  :  &nbsp; <span>{{$restaurant->deliver_time_from}} </span>   to  <span> {{$restaurant->deliver_time_to}} </span> </h3>
                                    </div>
                                </aside>
                                <aside class="col-md-6 col-sm-6">
                                    <div class="text_col_rlt">
                                        <div class="icon"> <img src="/assets/website/images/charge.png" width="61" height="61" alt="img"> </div>
                                        <h3> deliver Charge  &nbsp;&nbsp;&nbsp;  :  &nbsp;&nbsp;&nbsp; <span>{{$restaurant->deliver_charge}} KWD</span> </h3>
                                    </div>
                                </aside>


                            </div>
                        </aside>

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

            </div>
        </article>
      <center>  <a href="/restaurant/menuItem?restaurant_id={{$restaurant->id}}" class="btn cust-btn btn-lg"> {{trans('website.showMenu')}}</a> </center>
    </section>
    <!--inner content-->




@stop