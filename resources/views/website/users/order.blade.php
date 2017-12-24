@extends('website.layouts.inner')
@section('title', Lang::get('website.checkout'))
@section('content')

    @include('website.partials.innerSearch',['title'=>trans('website.checkout'),'img'=>'/assets/website/images/add_new_shop.png','icon'=>'fa fa-list','title2'=>trans('website.checkoutTitle')])

<style type="text/css">
    
    #search_rest_icon{
            margin-top: -47px !important;
    }
</style>

<section class="inner-wrapper">
    <article class="container">
      <div class="content_wrapper">

        <section class="promotion-listing">
          <div class="row promotionwrap">
            <aside class="col-md-12">
              <div class="promotion_details_col">
                <div> 
                  
                  <!-- Nav tabs -->
                  <ul class="nav-2 nav-tabs-2" role="tablist">
                    <div class="liner"></div>
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">1  </a>
                    <h1>{{trans('website.deliveryInformation')}}</h1>  
                    </li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2</a>
                      <h1>{{trans('website.orderSummary')}}</h1>
                    </li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">3</a>
                      <h1>{{trans('website.payment')}}</h1>
                    </li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">4</a>
                      <h1>{{trans('website.complete')}}</h1>
                    </li>
                  </ul>
                  
                  <!-- Tab panes -->
                  <div class="tab-content-2">
                    <div role="tabpanel" class="tab-pane fade in active" id="home"> 
                      <!-- Delivery Information  Tab 1 -->
                      <div class="delivery-information">
                        <center>
                          <h1>{{trans('website.deliveryInformation')}} </h1>
                        </center>
                        <div class="col-md-4">
                          <h2>{{trans('website.deliveryAddress')}} <span>{{trans('website.edit')}}</span></h2>
                         <div class="lft">
                        <div class="icon"><img src="/assets/website/images/map-icon2.png" width="28" height="40" alt="icon"></div>
                        <p>Block No:{{$oAddress['block'] }},  Street: {{$oAddress['street'] }} <br/>
                        building: {{$oAddress['building'] }} ,avenue: {{$oAddress['avenue'] }} </p>
                      </div>
                        </div>
                        <div class="col-md-8">
                          <h2>{{trans('website.newAddress')}}</h2>
                             {!! Form::model($oAddress, [
                                        'method' => 'PATCH',
                                        'url' => '/address/0',
                                        'class' => 'form-horizontal  ajaxForm'
                                    ]) !!}
                      <div class="rt">
                        <div class="row">
                          <aside class="col-md-6 col-sm-6">
                                <div class=" {{ $errors->has("first_name") ? "has-error" : ""}}  ">
                                        {!! Form::text("first_name", null, ["class" => "text_box5","placeholder"=> trans("website.firstName")]) !!}
                                            {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                          <aside class="col-md-6 col-sm-6">
                                <div class=" {{ $errors->has("last_name") ? "has-error" : ""}}  ">
                                            {!! Form::text("last_name", null, ["class" => "text_box5","placeholder"=> trans("website.lastName")]) !!}
                                            {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                          <aside class="col-md-6 col-sm-6">
                                     <div class="{{ $errors->has("block") ? "has-error" : ""}}  ">
                                            {!! Form::text("block", null, ["class" => "text_box5","placeholder"=> trans("website.block")]) !!}
                                            {!! $errors->first("block", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                          <aside class="col-md-6 col-sm-6">
                             <div class=" {{ $errors->has("area_id") ? "has-error" : ""}}  ">
                                 {!! Form::select("area_id",[''=>trans('general.selectOne')]+$areaList, null, ["class" => "text_box5","placeholder"=> trans("website.country")]) !!}
                                            {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                          <aside class="col-md-6 col-sm-6">
                          <div class=" {{ $errors->has("street") ? "has-error" : ""}}  ">
                                            {!! Form::text("street", null, ["class" => "text_box5","placeholder"=> trans("website.street")]) !!}
                                            {!! $errors->first("street", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                           <aside class="col-md-6 col-sm-6">
                              <div class=" {{ $errors->has("avenue") ? "has-error" : ""}}  ">
                                            {!! Form::text("avenue", null, ["class" => "text_box5","placeholder"=> trans("website.Avenue")]) !!}
                                            {!! $errors->first("avenue", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                             <aside class="col-md-6 col-sm-6">
                               <div class=" {{ $errors->has("floor") ? "has-error" : ""}} ">
                                            {!! Form::text("floor", null, ["class" => "text_box5","placeholder"=> trans("website.floor")]) !!}
                                            {!! $errors->first("floor", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                           <aside class="col-md-6 col-sm-6">
                               <div class=" {{ $errors->has("building") ? "has-error" : ""}}  ">
                                            {!! Form::text("building", null, ["class" => "text_box5","placeholder"=> trans("address.building")]) !!}
                                            {!! $errors->first("building", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                          <aside class="col-md-6 col-sm-6">
                                 <div class=" {{ $errors->has("phone") ? "has-error" : ""}}  ">
                                            {!! Form::text("phone", null, ["class" => "text_box5","placeholder"=> trans("website.phone")]) !!}
                                            {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                          <aside class="col-md-6 col-sm-6">
                            <div class=" {{ $errors->has("postal_code") ? "has-error" : ""}}  ">
                                            {!! Form::text("postal_code", null, ["class" => "text_box5","placeholder"=> trans("website.postal_code")]) !!}
                                            {!! $errors->first("postal_code", "<p class='help-block'>:message</p>") !!}
                                    </div>
                          </aside>
                         <aside class="col-sm-12">
                                <div class="sub-line">
                                  <input type="checkbox">
                                  <label>{{trans('website.useDeliveryAddress')}}</label>
                                </div>
                              </aside>
                              <div class="row">
                                <div class="col-md-12">
                                   <input type="hidden" name="add_address" value="1">
                                  <button onClick="#profile" class="cap-box-gray" name="add_address" value="1" data-toggle="modal" data-target="#myModal2" >
                                  <h3>Save & Continue</h3>
                                  </button>
                                </div>
                              </div>
                        </div>
                      </div>
                        {!! Form::close() !!}
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile"> 
                      <!-- Order Summary Tab 2 -->
                      <div class="order-summary">
                        <center>
                          <h1>{{trans('website.orderSummary')}}@if(isset($oAddress->name))( {{trans('website.deliverTo')}} {{$oAddress->name}} )@endif </h1>
                        </center>
                        <section class="sub-wrapper">
                          <div class="add-new-shop-wrap">
                            <div class="shopping-cart">
                              <table>
                                <thead>
                                  <tr>
                                    <th width="9%">&nbsp;</th>
                                   <th width="36%">{{trans('website.product')}}</th>
                                 <th width="15%">{{trans('website.price')}}</th>
                                <th width="15%">{{trans('website.qty')}}</th>
                                <th width="15%">{{trans('website.total')}}</th>
                                    <th width="10%">&nbsp;</th>
                                  </tr>
                                </thead>
                                <tbody>
                                     @if(count($oOrder))
                                   @foreach($oOrder->cart as $cart)
                                 <tr>
                                <td width="9%" valign="middle"><img  src="{{$cart->dish->img}}" width="83" height="81" alt="img"></td>
                                <td width="36%" valign="middle">{{$cart->dish->{'name_'.config('app.locale')} }}</td>
                                <td width="15%" valign="middle">{{$cart->unit_price}} KD</td>
                                <td width="15%" valign="middle"><!--Quantity-->
                                  
                                  <div class="sp-quantity">
                                    <div class="sp-minus fff"> <a class="ddd" href="#/home">-</a> </div>
                                    <div class="sp-input">
                                      <input type="text" class="quntity-input" value="1" />
                                    </div>
                                    <div class="sp-plus fff"> <a class="ddd" href="#/home">+</a> </div>
                                  </div></td>
                                <td width="15%" valign="middle"> {{ floatval($cart->unit_price) * floatval($cart->quantity)}} KD</td>
                                <td width="10%" align="center" valign="middle"><img src="/assets/website/images/comment-icon.svg" alt="img" width="200" height="200" class="comment-btn"> &nbsp; <a href="/cart/delete/{{$cart->id}}"><img src="/assets/website/images/delete-icon.svg" alt="img" width="100" height="100" class="delete-btn"></a></td>
                              </tr>
                               


                                                @endforeach
                                            @endif
                       
                            </tbody>
                          </table>
                          {!! Form::model($request,['method'=>'get']) !!}
                              <div class="row">
                                <aside class="col-md-12">
                                  <div class="shopping-cart-total">{{trans('website.grandTotal')}}</div>
                                  <div class="shopping-cart-price">  {{--  {{ floatval($total)+floatval($restaurant_deliver_charge)}}--}} {{ floatval($cart->unit_price) * floatval($cart->quantity)}}  KWD</div>
                                </aside>
                              </div>
                              <div class="liner-2">&nbsp;</div>
                              <aside class="col-sm-12">
                                <div class="cap-box-red">
                                <h3>{{trans('website.time')}}</h3>
                                </div>
                              </aside>
                              <div class="col-md-12">
                                <div class="reg-wrap2">
                                  <div class="row">
                                    <aside class="col-md-12 col-sm-12">
                                      <select class="text_box5 selectt">
                                        <option>{{trans('website.now')}}</option>
                                      </select>
                                    </aside>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                       <h4>Or  Choose Date & Time</h4>
                          </div>
                          <div class="col-md-12 col-sm-9">
                            <div class="reg-wrap">
                              <div class="row">
                                <aside class="col-md-6 col-sm-6">
                                  <div class="input-group date form_date col-md-12 clnrd" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                   <!--  <input class="text_box5" placeholder="Date of Birth" readonly="" type="text"> -->
                                    {!!  Form::select('selected_day',$available_days,null,['onchange'=>'changeDeliverTimeList($(this));','id'=>'selectDayList','class'=>'text_box5'])  !!}
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
                                  <input id="dtp_input2" value="" type="hidden">
                                </aside>
                                <aside class="col-md-6 col-sm-6">
                                  <div class="input-group date form_time col-md-12 clnrd" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                   <!--  <input class="text_box5" placeholder="Time" readonly="" type="text"> -->
                                   {!! Form::select('selected_time',[],null,['id'=>'selectTimeList','class'=>'text_box5'])  !!}
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span> </div>
                                     {!! $errors->first("deliver_time", "<p class='help-block'>:message</p>") !!}
                                 <!--  <input id="dtp_input3" value="" type="hidden"> -->
                                 {!! Form::hidden('selected_address_id',null)  !!}
                                            {!! Form::hidden('order_id',null)  !!}


                                            {!! $errors->first("deliver_time", "<p class='help-block'>:message</p>") !!}
                                </aside>
                              </div>
                            </div>
                          </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages"> 
                      <!-- Payment Tab 3 -->
                      
                      <div class="payment">
                        <center>
                          <h1>{{trans('website.totalPayment')}}</h1>
                           </center>
                    <div class="col-md-12">
                      <div class="icon-col">
                        <div class="icon"><img src="/assets/website/images/payment-icon1.png" width="70" height="47" alt="icon"></div>
                        <div class="icon"><img src="/assets/website/images/payment-icon2.png" width="70" height="47" alt="icon"></div>
                        <div class="icon"><img src="/assets/website/images/payment-icon3.png" width="70" height="47" alt="icon"></div>
                        <div class="icon"><img src="/assets/website/images/payment-icon4.png" width="70" height="47" alt="icon"></div>
                      </div>
                    </div>
                    <div class="row">
                      <h2>{{trans('website.totalPayment')}} {{-- {{ floatval($total)+floatval($restaurant_deliver_charge)}}--}} {{ floatval($cart->unit_price) * floatval($cart->quantity)}}  
                       KWD</h2>
                        </div>
                        <div class="row payment-method-col">
                          <div class="col-md-3">
                           <div class="checkbox-col-hed">{{trans('website.choosePayment')}}</div>
                          </div>
                            <div class="col-md-3">
                        <div class="checkbox-col">
                         <!--  <input id="checkBox" type="checkbox"> -->
                         {!! Form::radio('payment_type',config('array.payment_type_visa_index'),null,[]) !!}
                          &nbsp; {{trans('website.creditCard')}}</div>
                      </div>
                          <div class="col-md-3">
                        <div class="checkbox-col">
                          <!-- <input id="checkBox" type="checkbox"> -->
                          {!! Form::radio('payment_type',config('array.payment_type_cash_index'),(!isset($request->payment_type)? true:null),[]) !!}
                          &nbsp; {{trans('website.cash')}}</div>
                      </div>
                      <div class="col-md-3">
                        <div class="checkbox-col">
                          <!-- <input id="checkBox" type="checkbox"> -->
                          {!! Form::radio('payment_type',config('array.payment_type_knet_index'),null,[]) !!}
                          &nbsp; {{trans('website.knet')}}</div>
                      </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                              <button name="proceedToPayment" value="save" type="submit" class="cap-box-gray">
                             <h3>{{trans('website.continue')}}</h3>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="settings"> 
                      <!-- Complete Tab 4 -->
                      <div class="complete">
                        <center>
                         <h1>{{trans('website.complete')}}</h1>
                        </center>
                        <div class="row">
                          <h2>Thank you! Your order is complete.</h2>
                        </div>
                        <p>Your order reference is <span>{{$oOrder['success_order_id'] }}.</span></p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </section>
           {!! Form::close() !!}
      </div>
    </article>
  </section>





  <script src="js/jquery.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script> 
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
  $('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_time').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
    });
</script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/responsiveslides.min.js"></script> 
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
<script>$('.shopwrap').smoove({offset:'40%'});</script> 
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
<script>
  $(".ddd").on("click", function () {

    var $button = $(this);
    var oldValue = $button.closest('.sp-quantity3').find("input.quntity-input").val();

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

    $button.closest('.sp-quantity3').find("input.quntity-input").val(newVal);

});
</script> 
<SCRIPT>
    function setupLabel() {
        if ($('.label_check input').length) {
            $('.label_check').each(function(){ 
                $(this).removeClass('c_on');
            });
            $('.label_check input:checked').each(function(){ 
                $(this).parent('label').addClass('c_on');
            });                
        };
        if ($('.label_radio input').length) {
            $('.label_radio').each(function(){ 
                $(this).removeClass('r_on');
            });
            $('.label_radio input:checked').each(function(){ 
                $(this).parent('label').addClass('r_on');
            });
        };
    };
    $(document).ready(function(){
        $('.label_check, .label_radio').click(function(){
            setupLabel();
        });
        setupLabel(); 
    });
</SCRIPT>








<!-- laravel -->


@stop

@section("script")
@parent

<script>
    var available_deliver_times={!! json_encode($available_deliver_times) !!};

    if(typeof available_deliver_times['today'] != "undefined"){
         $('#selectDayList').prepend('<option value="today">Today</option>');

        for(var i=0;i<available_deliver_times['today'].length;i++){

            $('#selectTimeList').append('<option value="'+available_deliver_times['today'][i]+'">'+available_deliver_times['today'][i]+'</option>');
        }
    }else{
        for(var index  in available_deliver_times){

            for(var i=0;i<available_deliver_times[index].length;i++){

                $('#selectTimeList').append('<option value="'+available_deliver_times[index][i]+'">'+available_deliver_times[index][i]+'</option>');
            }
            break;
        }
    }

    function changeDeliverTimeList(selectDayList){
        var index =selectDayList.val();
        $('#selectTimeList').html('');

        for(var i=0;i<available_deliver_times[index].length;i++){

            $('#selectTimeList').append('<option value="'+available_deliver_times[index][i]+'">'+available_deliver_times[index][i]+'</option>');
        }
    }

    $('#insertAddressIframe').attr('src','/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'')

</script>


@stop
<?php
// todo this code to generat paci token please move this code to controller
// Added by ibtisam al-hitteh
// generate token
//create array of data to be posted
$data = array('username' => 'SahalatUser', 'password' => '$ah@lat697', 'client' => 'requestip', 'expiration' => '20190', 'f' => 'pjson' , 'php_master' => true);
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://kuwaitportal.paci.gov.kw/arcgis/sharing/generateToken", 
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_POST => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data 
));
$response = curl_exec($curl);       

$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  $obj = json_decode($response , true);
  $token = $obj['token'];
}
?>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script>
    // By Ibtisam alhitteh
    $(document).ready(function(){
      $("#paci_number").blur(function(){
                            var toke ;
                                                         $.ajax({
                        type: 'POST',
                        
                        url : '{{route('getpacitoken')}}',
                        
                        success:function(data){
                                    var token   = data;
        var civilId = $('#paci_number').val();
                                
        var lang  = "{{config("app.locale")}}";
        fields_empty();
        var civilId_len = civilId.length;
        if(civilId_len==8)
          paci_geocoder_by_civilId(token , civilId ,lang);
        else
          console.log("CivilId error");

                        },
                        timeout:10000
                    });

      });

  
      // Empty fields in form
      function fields_empty(){
        //pacl_number
        $("#paci_number").val("");
                                $("#block").val("");
        //street
        $("#street").val("");
        //avenue
        $("#avenue").val("");
        //building
        $("#building").val("");
        //floor
        //floor
        $("#floor").val("");
        //apartment_number    
        $("#apartment_number").val("");
        // directions
        $('#directions').val("");
      
      }
      
      function paci_geocoder_by_civilId (token , civilId , lang){
                            
        $.ajax({
           url: 'https://kuwaitportal.paci.gov.kw/arcgisportal/rest/services/Hosted/PACIGeocoder/FeatureServer/0/query?where=civilid='+civilId+'&returnGeometry=false&f=pjson&token='+token+'&outFields=*',
           data: {civilid:'', returnGeometry:"false", token:'',  f:"pjson" , outFields:"*"},
           error: function() {
            $('#info').html('<p>An error has occurred</p>');
           },
           dataType: 'json',
           success: function(data) { 
          try {
                                            
            var result = jQuery.parseJSON(JSON.stringify(data)); 
            if(result.error){
                                              
              console.log("Code: "+result.error.code);
              console.log("Message: "+result.error.message);
              console.log("Details: "+result.error.details);
              console.log("URL: "+'https://kuwaitportal.paci.gov.kw/arcgisportal/rest/services/Hosted/PACIGeocoder/FeatureServer/0/query?where=civilid='+civilId+'&returnGeometry=false&f=pjson&token='+token+'&outFields=*');
            }else{
               var features = jQuery.parseJSON(JSON.stringify(result.features[0]));
               if(lang=="en"){
                parcing_data_en(features.attributes);
               }else{
                parcing_data_ar(features.attributes);
               }
            }
          }
          catch(err) {
            console.log(err.message);
          }
           },
           type: 'GET'
        });
        
      }
  
      function parcing_data_en (data){
                        
        //pacl_number
        $("#paci_number").val(data.civilid);
        //block
        $("#block").val(data.blockenglish);
        //street
        $("#street").val(data.streetenglish);
        //avenue
        $("#avenue").val(data.neighborhoodenglish);
        //building
        $("#building").val(data.buildingnameenglish);
        //floor
        //floor
        $("#floor").val(data.floor_no);
        //apartment_number    
        $("#apartment_number").val(data.unit_no);
        // directions
        $('#directions').val(data.location);
      }
  
      function parcing_data_ar (data){
        //pacl_number
        $("#paci_number").val(data.civilid);
        //block
        $("#block").val(data.blockarabic);
        //street
        $("#street").val(data.streetarabic);
        //avenue
        $("#avenue").val(data.neighborhoodarabic);
        //building
        $("#building").val(data.buildingnamearabic);
        //floor
        $("#floor").val(data.floor_no);
        //apartment_number    
        $("#apartment_number").val(data.unit_no);
        //location
        $('#directions').val(data.location);
      }
    });

  </script>
        
<!-- end laravel -->