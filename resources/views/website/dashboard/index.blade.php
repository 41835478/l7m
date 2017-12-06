@extends('website.layouts.main')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')


    @section('headerForm')
        @parent
        {!! Form::open(['route'=>'restaurant.index','method'=>'get']) !!}
        <section class="find_filter">
            <article class="container">
                <div class="filter-box">
                    <div class="cap-box">
                        <h1>FIND OUR SHOPS</h1>
                    </div>
                    <div class="inn_bx">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="categry">
                                    <h4>List of L7m</h4>
                                    {!! Form::select('cuisine_id',$aCuisines,null,['class'=>'newstyle','required'=>'required', 'oninvalid'=>"this.setCustomValidity('".trans('website.cuisinereq')."')" ]) !!}
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6">
                                <div class="categry">
                                    <h4>Select Area </h4>
                                    {!! Form::select('area_id',$aAreas,null,['class'=>'newstyle','required'=>'required','id'=>'areaSearchSelect']) !!}
                                </div>
                            </div>
                            <div class="col-md-2 col-md-12">

                                <input type="submit" class="sub_btn" value="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <!--find shop-->
        </div>
        {!! Form::close() !!}






        <article class="container">
            <div class="about_wrap">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1>WHO WE ARE</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                        <a href="#">Read More</a> </div>
                </div>
                <div class="row mission">
                    <aside class="col-md-6 col-sm-6">
                        <div class="mis_vis">
                            <div class="icon_rund"><img src="/assets/website/images/vision.png" alt=""></div>
                            <h3>Vision</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking...</p>
                        </div>
                    </aside>
                    <aside class="col-md-6 col-sm-6">
                        <div class="mis_vis">
                            <div class="icon_rund"><img src="/assets/website/images/mission.png" alt=""></div>
                            <h3>Mission</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                        </div>
                    </aside>
                </div>
            </div>
        </article>














        @endsection












                <!--shops-->
        <section class="shop-wrapper">
            <article class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12"> <a href="/restaurant">
                            <div class="shop_box"> <img src="/assets/website/images/shop1.jpg" alt="">
                                <div class="cont_bx">
                                    <div class="inn_cnt">
                                        <h3>all L7m Shop </h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <div class="col-md-4 col-sm-6 col-xs-12"> <a href="/restaurant?type=new">
                            <div class="shop_box"> <img src="/assets/website/images/shop2.jpg" alt="">
                                <div class="cont_bx">
                                    <div class="inn_cnt">
                                        <h3>New L7m Shop</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <div class="col-md-4 col-sm-6 col-xs-12"> <a href="/dish?type=mostSelling">
                            <div class="shop_box"> <img src="/assets/website/images/shop3.jpg" alt="">
                                <div class="cont_bx">
                                    <div class="inn_cnt">
                                        <h3>Most Selling L7m/Orders </h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </div>
            </article>
        </section>
        <!--shops-->




















        <!-- <section class="about_part">
            <div class="container">
              <div class="row">


              </div>
            </div>
          </section> -->

    {{--<section class="about_part"> <!--about_part-->--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                  {{--<div class="col-sm-6 linepart">--}}
 {{--<h2><i><img src="/assets/website/images/current_order.png" alt=""></i>{{trans('website.current')}} <br>--}}
            {{--<span>{{trans('website.orders')}}</span> </h2>--}}



          {{--<ul id="slideOrder">--}}
           {{--@foreach($currentOrder as $Order)--}}
               {{--<!-- {{$Order->id}} -->--}}
                {{--@if(count($Order->cart)>0)--}}
                {{--@foreach($Order->cart as $oneCart)--}}
            {{--<li>--}}
               {{--<div class="con_part1">--}}
                     {{--@if(isset($oneCart->dish->img))--}}
                        {{--<div class="about_img"><img src="{{$oneCart->dish->img}}" style="height: 100px;width: 150px;" alt="{{$oneCart->dish->name_en}}" alt="image">--}}
                       {{--</div>--}}
                     {{--@endif--}}
                       {{--<div class="item_description">--}}
                          {{--@if(isset($oneCart->dish->description_en))--}}
                              {{--<h4>{{$oneCart->dish->description_en}}</h4>--}}
                          {{--@endif--}}
                          {{--@if(isset($oneCart->restaurant->name_en))--}}
                            {{--<p> order to:{{$oneCart->restaurant->name_en}}   <br>--}}
                          {{--@endif--}}
                          {{--@if(isset($oneCart->restaurant->address_en))--}}
                             {{--from:  {{$oneCart->restaurant->address_en}}--}}
                          {{--@endif--}}
                          {{--<!-- @if(isset($oneCart->created_at))--}}
                          {{--{{ \Carbon\Carbon::parse($oneCart->created_at)->format('d M ') }}--}}

                          {{--@endif -->--}}

                              {{--</p>--}}

                       {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--@endforeach--}}
        {{--@endif--}}
        {{--@endforeach--}}
          {{--</ul>--}}

        {{--</div>--}}



                {{--<div class="col-sm-6 linepart1">--}}
                    {{--<h2><i><img src="/assets/website/images/about.png" alt="icon1"></i> {{trans('website.about')}}<br>--}}
                        {{--<span>{{trans('website.sahalat')}}</span> </h2>--}}

                    {{--<div class="con_part1">--}}
                        {{--<div class="item_description">--}}
                            {{--<h3>{{trans('website.aboutSahalatHeader')}}</h3>--}}
                            {{--<p>--}}
                              {{--{!! trans('website.aboutSahalatHomeBody') !!}--}}
                            {{--</p>--}}

                            {{--<a href="/about" class="btn btn-info"> {{trans('website.readmore')}}     </a>--}}
                        {{--</div>--}}



                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</section> <!--about_part end-->--}}



        <!--browse area-->

        <section class="browser-wrapper">
            <aside class="map-wrapper">
                <div style="width: 100%;" class="map-canvas"></div>
            </aside>
            <aside class="browse-area">
                <div class="pick-area">
                    <h3>Browsing Area By</h3>
                    <div class="row">
                        <aside class="col-md-5">
                            <h5>Browse By L7M Shop</h5>
                        </aside>
                        <aside class="col-md-7">

                            {!! Form::open(['route'=>'dish.index','method'=>'get','id'=>'dishSearchForm']) !!}

                            {!! Form::select('restaurant_id',$aRestaurants,null,['class'=>'select-box','onchange'=>'$("#dishSearchForm").submit();']) !!}
                            {!! Form::close() !!}
                        </aside>
                    </div>
                    <div class="row">
                        <aside class="col-md-5">
                            <h5>Browse By L7M</h5>
                        </aside>
                        <aside class="col-md-7">
                            {!! Form::open(['route'=>'restaurant.index','method'=>'get','id'=>'resturantByCuisineSearchForm']) !!}

                            {!! Form::select('area_id',$aAreas,null,['class'=>'select-box','onchange'=>'$("#resturantByAreaSearchForm").submit();']) !!}
                            {!! Form::close() !!}
                        </aside>
                    </div>
                    <div class="row">
                        <aside class="col-md-5">
                            <h5>Browse By Area</h5>
                        </aside>
                        <aside class="col-md-7">
                            {!! Form::open(['route'=>'restaurant.index','method'=>'get','id'=>'resturantByAreaSearchForm']) !!}
                            {!! Form::select('area_id',$aAreas,null,['class'=>'select-box','onchange'=>'$("#resturantByAreaSearchForm").submit();']) !!}
                            {!! Form::close() !!}
                        </aside>
                    </div>
                    <div class="row">
                        <aside class="col-md-5"></aside>
                        <aside class="col-md-7">
                            <div class="algn" style="display: none">
                                <input type="submit" class="brwse_btn" value="BROWSE">
                            </div>
                        </aside>
                    </div>
                </div>
            </aside>
        </section>

        <!--browse area-->




























{{--@if(false)--}}




        {{--<section class="browse">  <!--browse start-->--}}
        {{--<div class="bgpart">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-4 col-sm-12 browse1">--}}
                        {{--<div class="browse_con">--}}

                            {{--{!! Form::open(['route'=>'dish.index','method'=>'get','id'=>'dishSearchForm']) !!}--}}
                            {{--<h2><i><img src="/assets/website/images/browse1.png" alt="icon1"></i> {{trans('website.browseBy')}}<br>--}}
                                {{--<span>{{trans('website.restaurant')}}</span> </h2>--}}
                            {{--{!! Form::select('restaurant_id',$aRestaurants,null,['class'=>'newstyle','onchange'=>'$("#dishSearchForm").submit();']) !!}--}}
                            {{--{!! Form::close() !!}--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4 col-sm-12  @if(config('app.locale') =='ar') browse3 @else browse2 @endif ">--}}
                        {{--<div class="browse_con">--}}

                            {{--{!! Form::open(['route'=>'restaurant.index','method'=>'get','id'=>'resturantByAreaSearchForm']) !!}--}}
                            {{--<h2><i><img src=" @if(config('app.locale') =='ar')  /assets/website/images/browse2.png @else  /assets/website/images/browse3.png @endif" alt="icon1"></i>{{trans('website.browseBy')}}<br>--}}
                                {{--<span>{{trans('website.area')}}</span> </h2>--}}

                            {{--{!! Form::select('area_id',$aAreas,null,['class'=>'newstyle','onchange'=>'$("#resturantByAreaSearchForm").submit();']) !!}--}}
                            {{--{!! Form::close() !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    {{--<div class="col-md-4 col-sm-12  @if(config('app.locale') =='ar') browse2 @else browse3 @endif ">--}}
                        {{--<div class="browse_con">--}}

                            {{--{!! Form::open(['route'=>'restaurant.index','method'=>'get','id'=>'resturantByCuisineSearchForm']) !!}--}}
                            {{--<h2><i><img src=" @if(config('app.locale') =='ar')  /assets/website/images/browse2.png @else  /assets/website/images/browse3.png @endif" alt="icon1"></i>{{trans('website.browseBy')}} <br>--}}
                                {{--<span>{{trans('website.cuisine')}}</span> </h2>--}}

                            {{--{!! Form::select('cuisine_id',$aCuisines,null,['class'=>'newstyle','onchange'=>'$("#resturantByCuisineSearchForm").submit();']) !!}--}}
                            {{--{!! Form::close() !!}--}}

                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</section> <!--browse end-->--}}




{{--@endif--}}

@stop