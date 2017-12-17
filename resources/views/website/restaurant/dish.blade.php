@extends('website.layouts.inner')
@section('title', Lang::get('website.mostSelling'))
@section('content')

    @include('website.partials.innerSearch',['title'=>((isset($request->type))? trans('website.'.$request->type):trans('website.all').' <br><span>'.trans('website.dishes').'</span>'),'img'=>'/assets/website/images/shop-icon.png','icon'=>'fa fa-list','title2'=>trans('website.resturantDish')])
<!--,'title2'=>trans('website.signForm')-->





    <section class="inner-wrapper">
    <article class="container">
      <div class="content_wrapper">
      <!--   <div class="captions_sec">
          <h2>Welcome To Our offers</h2>
          <h6>Lorem Ipsum is simply dummy text of the printing</h6>
        </div> -->
        <section class="mostselling-listing">
          <div class="row mostsellingwrap">
             @if(count($oResults))
                            @foreach($oResults as $oResult)
        <aside class="col-md-4"> 
             
              <!--- most_selling_dt -->
              <div class="most_selling_dt"> <img src="{{$oResult->img}}" alt="">
                <div class="most_selling_dt_text">
                  <h3>{{$oResult->{'name_'.config('app.locale')} }}</h3>
                  <p>Fresh Meat Start Price:</p>
                  <div class="price">{{$oResult->price}} KD <span>75.00 KD</span></div>
                  <div class="icon_stars"> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> <span class="star glyphicon glyphicon-star-empty"></span> </div>
                  <div class="btn_dt"> 
                    
                    <!--- quantity -->
                    <div class="sp-quantity2">
                      <div class="sp-minus2 fff"> <a class="ddd" href="#/home">-</a> </div>
                      <div class="sp-input2">
                        <input type="text" class="quntity-input" value="1" />
                      </div>
                      <div class="sp-plus2 fff"> <a class="ddd" href="#/home">+</a> </div>
                    </div>
                    <div class="cap-box">
                      <h2><a onclick="window.location.href='/restaurant/menuItem?restaurant_id={{$oResult->restaurant_id}}&id={{$oResult->id }}'"> <img src="/assets/website/images/cart-icon.png"> ADD TO CART </a></h2>
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



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

<script>
$(".ddd").on("click", function () {

    var $button = $(this);
    var oldValue = $button.closest('.sp-quantity2').find("input.quntity-input").val();

    if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
    } else {
        // Don't allow decrementing below zero
        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }

    $button.closest('.sp-quantity2').find("input.quntity-input").val(newVal);

});
</script>
@stop



