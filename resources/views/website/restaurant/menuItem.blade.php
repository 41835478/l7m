@extends('website.layouts.inner')
@section('title', Lang::get('website.order'))
@section('content')

   @include('website.partials.innerSearch',['title'=>trans('website.dishes'),'img'=>'/assets/website/images/shop-icon.png','icon'=>'fa fa-list','request'=>$request,'title2'=>trans('website.menu')])
<!--,'title2'=>trans('website.signForm')-->
<style type="text/css">
    .col-sm-3{
        float: right !important;
    }
    .color-black{color: black}

</style>

    <!-- <article class="container">
        <div class="inn_caption">
            <h2>Dishes </h2>
        </div>
    </article> -->


    <section class="inner-wrapper">
        @include('common.partials.messages')

        <article class="container">
            <div class="content_wrapper">
              <!--   <div class="captions_sec">
                    <div class="icon_in"><img src="images/shop-icon.png" alt=""></div>
                    <h2>Welcome To Our Dishs</h2>
                    <h6>Lorem Ipsum is simply dummy text of the printing</h6>
                </div> -->
                <section class="mostselling-listing">
                    <div class="row mostsellingwrap">
                        @if(count($oResults))
                            @foreach($oResults as $oResult)
                            {!! Form::open(['route'=>'order.create','id'=>'f','method'=>'get','class'=>'xxx_ajaxForm']) !!}
                        <aside class="col-md-4">
                            <div class="most_selling_dt"> <img src="{{$oResult->img}}" alt="">
                                <div class="most_selling_dt_text">
                                    <h3><a href="/dish/{{$oResult->id}}" class="color-black">{{$oResult->name_en}}</a> </h3>
                                    <p>Fresh Meat Start Price:</p>
                                    <div class="price">{{$oResult->price}} KD <span>{{ isset($oResult->price_befor)? $oResult->price_befor:''}} KD </span></div>
                              
 <div class="stars_main"> <div id="stars"  data-id="{{$oResult->id}}"  data-model="dish" data-rating="{{$oResult->rating}}"class="starrr"></div> </div> 
                                 


                                    <div class="btn_dt">


                                        <div class="sp-quantity2">
                                            <div class="sp-minus2 fff"> <a class="ddd" href="#/home">-</a> </div>
                                            <div class="sp-input2">
                                                <input type="text" name="quantity" class="quntity-input" value="1" id="new_val" />
                                            </div>
                                            <div class="sp-plus2 fff"> <a class="ddd" href="#/home">+</a> </div>
                                        </div>
                            <!--      <div class="cap-box">
                              @if(isset(current_user()->getUser()->id))
                                        
                                      @if(current_user()->getUser()->type !=config('array.users_type_guest_index'))
                                         @if(1 > 0)
                                            <h2>  <a href="/cart" > <img src="/assets/website/images/cart-icon.png">{{trans('restaurant.addToCart')}}</a></h2>
                                         @endif  
                                      @else
                                    
                                         <h2> <a data-toggle="modal" data-target="#myModall" href="#" ><img src="/assets/website/images/cart-icon.png">{{trans('restaurant.addToCart')}}</a></h2>
                                       @endif
                                    @endif
                                </div> -->
                                        <div class="cap-box">
                                            <h2><a href="/cart" onclick="document.getElementById('f').submit();"> <img src="/assets/website/images/cart-icon.png"> {{trans('restaurant.addToCart')}} </a></h2>
                                        </div>




                                    </div>
                                </div>
                                {!! Form::hidden('dish_id',$oResult->id) !!}
                        {!! Form::close() !!}
                            </div>
                        </aside>

@endforeach

                            @endif



                    </div>
                </section>
            </div>
        </article>
    </section>








    {!! HTML::script('/assets/website/js/jquery.smoove.js')!!}
    {!! HTML::script('/assets/website/js/jquery1.11.3.min.js')!!}


 <script>
        $(".ddd").on("click", function () {

            var $button = $(this);
            var oldValue = $button.closest('.sp-quantity2').find("input.quntity-input").val();

            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
                $("input.quntity-input").val=newVal;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;


                  var x=  $("input.quntity-input").val=newVal;

                    // alert( x);

                } else {
                    newVal = 0;
                }
            }

            $button.closest('.sp-quantity2').find("input.quntity-input").val(newVal);



        });
    </script>












@stop