@extends('website.layouts.inner')
@section('title', Lang::get('website.createAccount'))
@section('content')

@include('website.partials.innerSearch',['title'=>trans('website.signUp'),'img'=>'/assets/website/images/reg-icon.png','icon'=>'fa fa-list','title2'=>trans('website.title2')])
<!--,'title2'=>trans('website.signForm')-->
   <!--  <article class="container">
        <div class="inn_caption">             
  <h2>{{trans('website.signUp')}}</h2>
        </div>
    </article> -->

<section class="inner-wrapper">
    <article class="container">
    
    <div class="content_wrapper">
      <!--   <div class="captions_sec">
            <div class="icon_in"><img src="/assets/website/images/reg-icon.png" alt=""></div>
            
            <h6>Lorem Ipsum is simply dummy text of the printing</h6>
        </div> -->
        
        <section class="sub-wrapper">
            <div class="row">
            
                <div class="col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1">
                    <div class="log-wrap">
                    <ul class="log-way">
                                <li><a href="#"><img src="/assets/website/images/facebook.png" alt="" title="facebook"></a></li>
                                <li><a href="#"><img src="/assets/website/images/twitter.png" alt="" title="twitter"></a></li>
                                <li><a href="#"><img src="/assets/website/images/google.png" alt="" title="google +"></a></li>
                    </ul>
                    
                    <div class="form-fill"><h5>OR   <span>(  Fill the Below form to Register  )</span></h5></div>
                    
                    
                    </div>
                </div>
        
        
            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                <div class="reg-wrap">
                    {!! Form::model($request,['route'=>'users.index','class'=>'ajaxForm'])  !!}
                    <div class="row">
                       <!--  <aside class="col-md-6 col-sm-6"><input type="text" class="text_box5" placeholder="First Name"></aside>
                        <aside class="col-md-6 col-sm-6"><input type="text" class="text_box5" placeholder="Last Name"></aside>
                        <aside class="col-md-6 col-sm-6"><input type="text" class="text_box5" placeholder="Email"></aside>
                        <aside class="col-md-6 col-sm-6"><input type="text" class="text_box5" placeholder="Phone Number"></aside>
                        <aside class="col-md-6 col-sm-6"><input type="text" class="text_box5" placeholder="Address"></aside>
                        <aside class="col-md-6 col-sm-6"><select class="text_box5 selectt"><option>Country</option></select></aside>
                        <aside class="col-md-6 col-sm-6"><input type="password" class="text_box5" placeholder="Password"></aside>
                        <aside class="col-md-6 col-sm-6"><input type="password" class="text_box5" placeholder="Confirm Password"></aside> -->


                           <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-md-6 col-sm-6">
                                 <div >
                                         {!! Form::text("first_name", null, ["class" => "text_box5","placeholder"=> trans("users.first_name")]) !!}
                                            {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-md-6 col-sm-6">
                                        <div class="">
                                            {!! Form::text("last_name", null, ["class" => "text_box5","placeholder"=> trans("users.last_name")]) !!}
                                            {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                 <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-md-6 col-sm-6">
                                        <div >
                                            {!! Form::text("email", null, ["class" => "text_box5","placeholder"=> trans("users.email")]) !!}
                                            {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                      <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-md-6 col-sm-6">
                                        <div >
                                            {!! Form::text("mobile", null, ["class" => "text_box5","placeholder"=> trans("users.mobile")]) !!}
                                            {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                 <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-md-6 col-sm-6">
                                        <div >
                                            {!! Form::select("area_id",[''=>trans('general.selectOne')]+$areaList, null, ["class" => "text_box5","placeholder"=> trans("website.area")]) !!}
                                            {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>



                                      <div class="form-group {{ $errors->has("address") ? "has-error" : ""}}  col-md-6 col-sm-6">
                                     
                                        <div >
                                            {!! Form::text("address", null, ["class" => "text_box5","placeholder"=> trans("website.address")]) !!}
                                            {!! $errors->first("address", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>



                                       <div class="form-group {{ $errors->has("password") ? "has-error" : ""}}  col-md-6 col-sm-6">
                                        <div >
                                            {!! Form::input("password","password", null, ["class" => "text_box5","placeholder"=> trans("users.password")]) !!}
                                            {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("password_confirmation") ? "has-error" : ""}}  col-md-6 col-sm-6">
                                        <div >
                                            {!! Form::input("password","password_confirmation", null, ["class" => "text_box5","placeholder"=> trans("users.password_confirmation")]) !!}
                                            {!! $errors->first("password_confirmation", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>
{!! Form::hidden('long',null,['id'=>'hiddenLongitudeInput']) !!}
                                        {!! Form::hidden('lat',null,['id'=>'hiddenLatitudeInput']) !!}

                                          @if(isset($request->order_id))
                                {!! Form::hidden('order_id',$request->order_id) !!}
                                @endif
                    
                    </div>
                    
                    <div class="row btn-groups">
                            <aside class="col-md-6 col-sm-6 col-xs-6"><button type="reset" class="sub_btn pull-right" >{{trans('website.reset')}}</button></aside>
                            <aside class="col-md-6 col-sm-6 col-xs-6"><button type="submit" class="sub_btn" >{{trans('website.submit')}}</button></aside>
                            
                    </div>

                    
                </div>
                <!--  @include('website.partials.asideMenu') -->
                
            </div>
            
             {!! Form::close() !!}
            
        </div>
        </section>
        
        
    </div>


    </article>
</section>

    
    
<?php
// todo this code to generat paci token please move this code to controller
// Added by ibtisam al-hitteh
// generate token
//create array of data to be posted
$data = array('username' => 'SahalatUser', 'password' => '$ah@lat697', 'client' => 'requestip', 'expiration' => '20160', 'f' => 'pjson' , 'php_master' => true);
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



@stop

@section('script')
    @parent
    
  
    <script>
        getLocation();

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
                                
                var lang    = "{{config("app.locale")}}";
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
                //paci_number
                $("#paci_number").val("");
                //block
                $("#block").val("");
                //street
                $("#street").val("");
                //avenue
                $("#avenue").val("");
                //building
                $("#building").val("");
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
                //paci_number
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
                $("#floor").val(data.floor_no);
                //apartment_number
                $("#apartment_number").val(data.unit_no);
                // directions
                $('#directions').val(data.location);
                loadIframe('insertAddressIframe', data.location);
            }
    
            function parcing_data_ar (data){
                //paci_number
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
                loadIframe('insertAddressIframe', data.location);
            }
            
            function loadIframe(iframeName, location) {
                  var $iframe = $('#' + iframeName); 
                  var urlbeg="https://www.google.com/maps/embed/v1/view?key=AIzaSyBg8j7Ws-kZRVXJqIoIhBIz9fizJZ6N-1w&center=";
                  var urlend="&zoom=18&maptype=roadmap";
                  var location_array = location.split(",");
                  var lat= location_array[0];
                  var lng= location_array[1];
                  
                 // var url = 'https://maps.google.com/maps?q='+location+'&hl=es;z=14&amp;output=embed';
                
                $('#hiddenLatitudeInput').val(location_array[0]);
                $('#hiddenLongitudeInput').val(location_array[1]);
                 $iframe.attr("src",urlbeg+lat+" , "+lng+urlend);
                
                return true;
            }

});
    </script>
    @stop