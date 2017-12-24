@extends('website.layouts.inner')
@section('title', Lang::get('website.allrestaurants'))
@section('content')

 {{--   @include('website.partials.innerSearch',['title'=>' <span>'.trans('website.restaurants').'</span>','img'=>'/assets/website/images/shop-icon.png','icon'=>'fa fa-list','request'=>$request,'title2'=>trans('website.resturants')] ) --}}







    <article class="container">
        <div class="inn_caption">
            @if($request->type)
                <h2>{{trans('website.newRestaurants')}}</h2>
            @else
                <h2>{{trans('website.restaurants')}}</h2>
            @endif
        </div>
    </article>



@if(false)


    <section class="inner_content_area">
        <div class="container">
            <div class="row">

                @if(count($oResults))
                @foreach($oResults as $oResult)
                <a href="/restaurant/{{$oResult->id}}" style="height:250px;" class="col-sm-6 col-md-4 col-lg-3">
                    <div class="res_list">
                        <img src="{{$oResult->img}}" style="height: 100px;"  alt="restaurant">
                        <div class="res_content">
                            <h3>{{$oResult->{'name_'.config('app.locale')} }}</h3>


                              @if(isset(current_user()->getUser()->id ) && current_user()->getUser()->type== config('array.users_type_registered_index'))


  <div class="stars_main" > <div id="stars" data-stop="{{ (config('module.restaurant_rate') ==config('module.restaurant_rate_active_index'))? 'false':'true' }}" data-model="restaurant" data-id="{{$oResult->id}}" class="starrr"></div> </div>

   @endif


                          
                            <h4>{{$oResult->{'description_'.config('app.locale')} }}</h4>
         <h3>{{trans('website.cuisines')}}: 
               {{join(', ', $oResult->cuisineList())}}</h3>
                        </div>
                    </div>

                </a>

                    @endforeach
                @else
                    <div class="noResultDiv" >{{trans('general.noResult')}}</div>
                    @endif

            </div>
        </div>


    </section>

@endif







        <!--inner content-->
    <section class="inner-wrapper">
        <article class="container">

            <div class="content_wrapper">
                <div class="captions_sec">
                    <div class="icon_in"><img src="assets/website/images/shop-icon.png" alt=""></div>
                    <h2>Welcome To Our Shops</h2>
                    <h6>Lorem Ipsum is simply dummy text of the printing</h6>
                </div>
                @if(count($oResults))
                <section class="shop-listing">
                    <div class="row shopwrap">

                        @foreach($oResults as $oResult)
                        <aside class="col-md-6 col-sm-6">
                            <div class="shop_dt">
                                <img src="{{$oResult->img}}" alt="">
                                <h3>{{$oResult->{'name_'.config('app.locale')} }}</h3>
                                <p>{{$oResult->{'description_'.config('app.locale')} }}</p>
                                <a href="/restaurant/{{$oResult->id}}">Read More</a>
                            </div>

                        </aside>



                    @endforeach
                    </div>





                </section>


                @else
                    <div class="noResultDiv" >{{trans('general.noResult')}}</div>
                    @endif
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
    </section>
    <!--inner content-->



























@stop



<!--ddd-->