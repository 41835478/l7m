@extends('website.layouts.inner')
@section('title', Lang::get('website.mostSelling'))
@section('content')

    @include('website.partials.innerSearch',['title'=>((isset($request->type))? trans('website.'.$request->type):trans('website.all').' <br><span>'.trans('website.dishes').'</span>'),'img'=>'/assets/website/images/shop-icon.png','icon'=>'fa fa-list'])
<!--,'title2'=>trans('website.signForm')-->





    <section class="inner-wrapper">
    <article class="container">
      <div class="content_wrapper">
        <div class="captions_sec">
          <h2>Welcome To Our offers</h2>
        <!--   <h6>Lorem Ipsum is simply dummy text of the printing</h6> -->
        </div>
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


<script type="text/javascript">
    

    function handleSelect(elm)
{
window.location = elm.value;
}
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 1500,
        namespace: "centered-btns"
      });


    });
  </script> 
<script src="js/jquery.smoove.js"></script> 
<script>$('.mostsellingwrap').smoove({offset:'40%'});</script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOaSmNcBHf07FWaVlO4pXgyFYMjmCPAEg"></script> 
<script src="js/prettymaps.js"></script> 
<script>

        $(function(){
            //default
            $('.map-canvas').prettyMaps({
                address: 'Kuwait City',
                image: 'images/map-icon.png',
                hue: '#d1bebe',
                saturation: -80
            });
            
         });    
  </script> 

<!--star script--> 
<script>
  $(".star.glyphicon").click(function() {
  $(this).toggleClass("glyphicon-star glyphicon-star-empty");
});
 </script> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
(function($) {
    $.fn.spinner = function() {
        this.each(function() {
            var el = $(this);

            // add elements
            el.wrap('<span class="spinner"></span>');     
            el.before('<span class="sub">-</span>');
            el.after('<span class="add">+</span>');

            // substract
            el.parent().on('click', '.sub', function () {
                if (el.val() > parseInt(el.attr('min')))
                    el.val( function(i, oldval) { return --oldval; });
            });

            // increment
            el.parent().on('click', '.add', function () {
                if (el.val() < parseInt(el.attr('max')))
                    el.val( function(i, oldval) { return ++oldval; });
            });
        });
    };
})(jQuery);

$('input[type=number]').spinner();
</script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
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



