@extends('website.layouts.inner')
@section('title', Lang::get('website.mostSelling'))
@section('content')

    @include('website.partials.innerSearch',['title'=>((isset($request->type))? trans('website.'.$request->type):trans('website.all').' <br><span>'.trans('website.dishes').'</span>'),'img'=>'/assets/website/images/current_order.png','icon'=>'fa fa-list'])






    <section class="inner_content_area">
        <div class="container">


            <div class="row">

<div class="col-md-6">
<label>filters :</label>
<select onchange="javascript:handleSelect(this)" class="newstyle">
    <option> all</option>
<option value="/dish?type=bestseller"> Best Seller </option>
<option value="/restaurant?bestRestaurant=2">By Restaurant </option>
<option value="/cuisine?bestcuisine=2">By Cusenes</option>

</select>

</div>

                <div class="col-sm-9">
                    <div class="row">

                        @if(count($oResults))
                            @foreach($oResults as $oResult)

                        <div class="col-sm-6 col-md-4 col-lg-4 clearfix">
                            <div class="dishes">
                                <img src="{{$oResult->img}}" alt="restaurant">
                                <div class="dishes-content">

                                    <h4>{{$oResult->{'name_'.config('app.locale')} }}</h4>
                                    <div class="stars_main"> <div id="stars"  data-stop="{{ (config('module.restaurant_rate') ==config('module.restaurant_rate_active_index'))? 'false':'true' }}"   data-id="{{$oResult->id}}"  data-model="dish" data-rating="{{$oResult->rating}}" class="starrr">
                                            {{--@for($i=0;$i< $oResult->rate;$i++)--}}
                                                <i class="fa fa-star"></i>
                                            {{--@endfor--}}
                                            {{--@for($i=$oResult->rate;$i<6 ;$i++)--}}
                                            {{--<i class="fa fa-star-o"></i>--}}
                                        {{--@endfor--}}
                                        </div> </div>
                                    <a href="/restaurant/{{$oResult->restaurant_id}}">
                                    <h3>
                                        @if(!isset($oResult->restaurant))
                                        {{$oResult->{'restaurant_name_'.config('app.locale')}  }}
@else
                                            {{$oResult->restaurant->{'name_'.config('app.locale')}  }}
                                        @endif
                                    </h3>
                                    </a>
                                    <button class="btn" onclick="window.location.href='/restaurant/menuItem?restaurant_id={{$oResult->restaurant_id}}&id={{$oResult->id }}'">{{trans('website.order')}}</button>
                                </div>
                            </div>
                        </div>

                            @endforeach
                            @endif


                    </div>
                </div>
@include('website.partials.asideMenu')
            </div>
        </div>


    </section>


<script type="text/javascript">
    

    function handleSelect(elm)
{
window.location = elm.value;
}
</script>

@stop



