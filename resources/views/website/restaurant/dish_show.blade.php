

@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    <article class="container">
        <div class="inn_caption">
            <h2>L7m Shop Menu</h2>
        </div>
    </article>


    <!--inner content-->
    <section class="inner-wrapper">
        <article class="container">
            <div class="content_wrapper">
                <div class="captions_sec">
                    <div class="icon_in"><img src="/assets/website/images/shop-icon.png" alt=""></div>
                    <h2>our Productsv</h2>
                    <h6>{{$dish->description}}</h6>
                </div>
                <section class="promotion-listing">
                    <div class="row promotionwrap">
                        <aside class="col-md-7">
                            <div class="promotion_details_col"><!-- thumb -->
                                <div class="thumb"> <img src="{{$dish->img}}" alt=""> </div>
                            </div>
                        </aside>
                        <aside class="col-md-5">
                            <div class="promotion_details_col">
                                <div class="text_col"><!-- text_col -->
                                    {!! Form::open(['route'=>'order.create','method'=>'get','class'=>'xxx_ajaxForm a','id'=>'myform']) !!}

                                    <h1>{{$dish->name_en}}</h1>
                                    <h2>{{$dish->review_en}}</h2>
                                    <div class="sep">&nbsp;</div>
                                    <h3>{{$dish->short_discrib_en}}</h3>
                                    <h4>{{$dish->price}} KD <span>{{$dish->price_befor}} </span></h4>
                                   <!--  <div class="icon_stars"> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> &nbsp; &nbsp; &nbsp; Star Rating - <span class="redtxt">( 4/5 )</span> </div> -->


                                   <div class="stars_main left-star"> <div id="stars"  data-id="{{$dish->id}}"  data-model="dish" data-rating="{{$dish->rating}}" class="starrr"></div> </div>


                                    <h5>Availability  &nbsp;  :  &nbsp; <span>{{$availabel}}</span></h5>
                                    <div class="row">
                                        @if($dish->quantity > 0)
                                        <div class="btn_col">
                                            <aside class="col-md-3">
                                                <div class="hed"> Quantity    :  &nbsp; </div>
                                            </aside>
                                            <aside class="col-md-4">
                                                <!--Quantity-->

                                                <div class="sp-quantity3">
                                                    <div class="sp-minus3 fff"> <a class="ddd" href="#/home">-</a> </div>
                                                    <div class="sp-input3">
                                                        <input type="text" class="quntity-input3" value="1" name="quantity" />
                                                    </div>
                                                    <div class="sp-plus3 fff"> <a class="ddd" href="#/home">+</a> </div>
                                                </div>
                                            </aside>
                                            <aside class="col-md-5">

                                                
                                                <div class="cap-box">
                                                    <h6><a href="#" onclick="document.getElementById('myform').submit();"> <img src="/assets/website/images/cart-icon.png"> ORDER </a> </h6>

                                                </div>


                                                
                                            </aside>
                                        </div>
                                        @endif
                                         {!! Form::hidden('dish_id',$dish->id) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                        </aside>
                    </div>
                    <div class="row promotionwrap">
                        <aside class="col-md-12">
                            <div class="promotion_details_col">
                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Product Description</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Add Your Comments</a></li>
                                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Share Your Star Rating</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <!-- product-description 1 -->
                                            <div class="product-description">
                                                <h3>{{$dish->name_en}}</h3>
                                                <p> {{$dish->description}} </p>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">

                                            <!-- Slideshow 1 -->
                                            <div class="rslides_container">
                                             @if(count($dish_rate))

                                @foreach($dish_rate as $rate)







<div class="reviews-col">
                      <aside class="col-md-2"> <img src="/assets/website/images/pre-thumb.jpg" alt=""> </aside>
                      <aside class="col-md-10">
                        <div class="rt-col">
                             <div class="stars_main folat-left-width"> <div id="stars"  data-id="{{$dish->id}}"  data-model="dish" data-rating="{{$dish->rating}}" class="starrr"></div> </div>
                          <p> <span class="date">{{$rate->created_at}}</span> </p>
                        </div>
                        <h3>{{$rate->title}}</h3>
                        <p>{{$rate->description}}<br/>
                          <span>{{$rate->users->first_name}} {{$rate->users->last_name}}</span> </p>
                      </aside>
                    </div>









                                    @endforeach

                                    @else 

                        No Review
                                    @endif





<div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $dish_rate->appends(Input::except('page'))->appends($request->all())->render()) !!}
                                </div>

                                            </div>
                                            <!---slideshow------->

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="messages">
                                            <!-- add your comments -->
                                            <div class="product-description">
                                                <h3>{{$dish->name_en}}</h3>
                                                 







ASK RAMI ABOUT IT







                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="settings">
                                            <!-- share your star rating -->
                                            <div class="product-description">
                                                <h3>{{$dish->name_en}}</h3>
                                                
                                                   ASK RAMI ABOUT IT
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="row promotionwrap">
                        <!-- promotion_details_col_similar_products -->
                        <div class="promotion_details_col_similar_products">
                            <div class="container">
                                <h3>SIMILAR <span>Products</span></h3>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                                <div id="menu1">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item item-col"><!-- item 1 -->
                                            <div class="thumb"> <img src="/assets/website/images/similar_products_thumb1.jpg" alt=""> </div>
                                            <h3>Red Meat</h3>
                                            <p>Fresh Meat Start Price:</p>
                                            <div class="price">60.00 KD <span>75.00 KD</span></div>
                                            <div class="icon_stars"> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> </div>
                                            <div class="btn_dt">
                                                <div class="cap-box">
                                                    <h2><a href="#"> <img src="/assets/website/images/cart-icon.png"> ORDER </a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item item-col"><!-- item 2 -->
                                            <div class="thumb"> <img src="/assets/website/images/similar_products_thumb2.jpg" alt=""> </div>
                                            <h3>Red Meat</h3>
                                            <p>Fresh Meat Start Price:</p>
                                            <div class="price">60.00 KD <span>75.00 KD</span></div>
                                            <div class="icon_stars"> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> </div>
                                            <div class="btn_dt">
                                                <div class="cap-box">
                                                    <h2><a href="#"> <img src="/assets/website/images/cart-icon.png"> ORDER </a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item item-col"><!-- item 3 -->
                                            <div class="thumb"> <img src="/assets/website/images/similar_products_thumb3.jpg" alt=""> </div>
                                            <h3>Red Meat</h3>
                                            <p>Fresh Meat Start Price:</p>
                                            <div class="price">60.00 KD <span>75.00 KD</span></div>
                                            <div class="icon_stars"> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> </div>
                                            <div class="btn_dt">
                                                <div class="cap-box">
                                                    <h2><a href="#"> <img src="/assets/website/images/cart-icon.png"> ORDER </a></h2>






                                                </div>
                                            </div>
                                        </div>
                                        <div class="item item-col"><!-- item 4 -->
                                            <div class="thumb"> <img src="/assets/website/images/similar_products_thumb1.jpg" alt=""> </div>
                                            <h3>Red Meat</h3>
                                            <p>Fresh Meat Start Price:</p>
                                            <div class="price">60.00 KD <span>75.00 KD</span></div>
                                            <div class="icon_stars"> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> </div>
                                            <div class="btn_dt">
                                                <div class="cap-box">
                                                    <h2><a href="#"> <img src="/assets/website/images/cart-icon.png"> ORDER </a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

            </div>
        </article>
    </section>
    <!--inner content-->
    {!! HTML::script('/assets/website/js/jquery1.11.3.min.js')!!}
    {!! HTML::script('/assets/website/js/owl.carousel.js')!!}


    <script type="text/javascript">
        $( document ).ready(function() {

            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:30,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    },
                    1200:{
                        items:3
                    }
                }
            })
        });
    </script>




    {!! HTML::script('/assets/website/js/responsiveslides.min.js')!!}

    <script>
        // You can also use "$(window).load(function() {"
        $(function () {

            // Slideshow 1
            $("#slider2").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 1500,
                namespace: "centered-btns2"
            });

        });
    </script>













      <script>
        $(".ddd").on("click", function () {

            var $button = $(this);
            var oldValue = $button.closest('.sp-quantity3').find("input.quntity-input3").val();

            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
                $("input.quntity-input3").val=newVal;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                  var x=  $("input.quntity-input3").val=newVal;


                } else {
                    newVal = 0;
                }
            }

            $button.closest('.sp-quantity3').find("input.quntity-input3").val(newVal);



        });
    </script>

@stop