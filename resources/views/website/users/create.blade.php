@extends('website.layouts.inner')
@section('title', Lang::get('website.createAccount'))
@section('content')

    @include('website.partials.innerSearch',['title'=>trans('website.signUpHtml'),'img'=>'/assets/website/images/sign-up-ico.png','icon'=>'fa fa-list'])


    <section class="inner_content_area">
        <div class="container">
            {!! Form::model($request,['route'=>'users.index','class'=>'ajaxForm'])  !!}

            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12 order-conform clearfix">
                            <section class="clearfix">
                                <div class="heading">{{trans('website.accountInformation')}}</div>

                                <div class="row">

                                    <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("email", trans("users.email"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("users.email")]) !!}
                                            {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("password") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("password", trans("users.password"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::input("password","password", null, ["class" => "form-control","placeholder"=> trans("users.password")]) !!}
                                            {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

<div style="clear:both"></div>
                                    <div class="form-group {{ $errors->has("password_confirmation") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("password_confirmation", trans("users.password_confirmation"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::input("password","password_confirmation", null, ["class" => "form-control","placeholder"=> trans("users.password_confirmation")]) !!}
                                            {!! $errors->first("password_confirmation", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>



                                    <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("first_name", trans("users.first_name"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("users.first_name")]) !!}
                                            {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div style="clear:both"></div>


                                    <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("last_name", trans("users.last_name"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("users.last_name")]) !!}
                                            {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("mobile_company") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("mobile_company", trans("users.mobile_company"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::select("mobile_company",[''=>trans('general.selectOne')]+config('array.users_mobile_company'), null, ["class" => "form-control","placeholder"=> trans("users.mobile_company")]) !!}
                                            {!! $errors->first("mobile_company", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div style="clear:both"></div>

                                    <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("mobile", trans("users.mobile"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("users.mobile")]) !!}
                                            {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>



                                    <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("phone", trans("users.phone"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("users.phone")]) !!}
                                            {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>



                                </div>
                            </section>
                            <section class="clearfix">
                                <div class="heading">{{trans('website.deliveryInformation')}}</div>


                                <div class="row">


                                    <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("address.name")]) !!}
                                            {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("area_id", trans("website.area"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::select("area_id",[''=>trans('general.selectOne')]+$areaList, null, ["class" => "form-control","placeholder"=> trans("website.area")]) !!}
                                            {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div style="clear:both"></div>

                                    <div class="form-group col-sm-12 map-cvr">
                                        <input class="form-control" placeholder="{{trans('website.address')}}" id="placeInput" type="text">
                                        <div  style="position:relative;" onclick="window.open('/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'', 'address map', 'width=1000,height=1000,status=yes');">
<div style="position:absolute;left:0px;top:0px;background-color:rgba(255,255,255,0.1);height: 200px;width:100%;">  </div>
<!--                                          
										  <iframe name="insertAddressIframe" id="insertAddressIframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9521.05146600762!2d-6.2630277!3d53.374346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72398e1c9e377ac0!2sCLG+Na+Fianna!5e0!3m2!1sen!2sie!4v1448021350769" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
-->
									   <iframe  name="insertAddressIframe"  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe" src="" height="200px" width="100%"></iframe>
										
										
										</div>
                                        <div class="map clearfix">
                                            {{--<iframe  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe"src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d187179.63669472354!2d47.53111409935966!3d29.33945907845681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!3m2!1d29.31166!2d47.481766!5e0!3m2!1sen!2sin!4v1488429901625" width="100%" height="100" frameborder="0" style="border:0" ></iframe>--}}
                                        </div>


                                        {!! Form::hidden('long',null,['id'=>'hiddenLongitudeInput']) !!}
                                        {!! Form::hidden('lat',null,['id'=>'hiddenLatitudeInput']) !!}

                                    </div>

                                    <div class="col-sm-6 radio">
                                        <div>

                                            <label><i class="fa fa-building" aria-hidden="true"></i>{!! Form::radio('type',0,null,[]) !!}  {{trans('website.appartment')}}</label>
                                            <label><i class="fa fa-home" aria-hidden="true"></i> {!! Form::radio('type',1,null,[]) !!}  {{trans('website.house')}}</label>
                                            <label><i class="fa fa-briefcase" aria-hidden="true"></i> {!! Form::radio('type',2,null,[]) !!}  {{trans('website.office')}}</label>
                                            {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                        </div>



                                    <div class="form-group {{ $errors->has("paci_number") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("paci_number", trans("website.paciNumber"), []) !!}
                                        <div class="">
                                            {!! Form::text("paci_number", null, ["class" => "form-control","placeholder"=> trans("website.paciNumber")]) !!}
                                            {!! $errors->first("paci_number", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                    <div style="clear:both"></div>


                                    <div class="form-group {{ $errors->has("block") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("block", trans("address.block"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("block", null, ["class" => "form-control","placeholder"=> trans("address.block")]) !!}
                                            {!! $errors->first("block", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("street") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("street", trans("address.street"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("street", null, ["class" => "form-control","placeholder"=> trans("address.street")]) !!}
                                            {!! $errors->first("street", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                    <div style="clear:both"></div>

                                    <div class="form-group {{ $errors->has("avenue") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("avenue", trans("address.avenue"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("avenue", null, ["class" => "form-control","placeholder"=> trans("address.avenue")]) !!}
                                            {!! $errors->first("avenue", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has("building") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("building", trans("address.building"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("building", null, ["class" => "form-control","placeholder"=> trans("address.building")]) !!}
                                            {!! $errors->first("building", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div style="clear:both"></div>

                                    <div class="form-group {{ $errors->has("floor") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("floor", trans("address.floor"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("floor", null, ["class" => "form-control","placeholder"=> trans("address.floor")]) !!}
                                            {!! $errors->first("floor", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has("apartment_number") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("apartment_number", trans("address.apartment_number"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("apartment_number", null, ["class" => "form-control","placeholder"=> trans("address.apartment_number")]) !!}
                                            {!! $errors->first("apartment_number", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>



                                    <div style="clear:both"></div>

                                    <div class="form-group {{ $errors->has("address_mobile") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("address_mobile", trans("address.mobile"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("address_mobile", null, ["class" => "form-control","placeholder"=> trans("address.mobile")]) !!}
                                            {!! $errors->first("address_mobile", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("address_phone") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("address_phone", trans("address.phone"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::text("address_phone", null, ["class" => "form-control","placeholder"=> trans("address.phone")]) !!}
                                            {!! $errors->first("address_phone", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>



                                    <div style="clear:both"></div>




                                    <div class="form-group {{ $errors->has("directions") ? "has-error" : ""}}  col-xs-12">
                                        {!! Form::label("directions", trans("address.directions"), []) !!} ({{trans('website.optional')}})
                                        <div class="">
                                            {!! Form::textarea("directions", null, ["class" => "form-control","style"=>"height:100px;","type"=>"text","placeholder"=> trans("address.directions")]) !!}
                                            {!! $errors->first("directions", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <section class="clearfix">
                                <div class="heading">{{trans('website.personalInformation')}}</div>

                                <div class="row">


                                    <div class="form-group {{ $errors->has("gender") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("gender", trans("users.gender"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::select("gender",[''=>trans('general.selectOne')]+config('array.users_gender'), null, ["class" => "form-control","placeholder"=> trans("users.gender")]) !!}
                                            {!! $errors->first("gender", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("occupation") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("occupation", trans("users.occupation"), []) !!}<span class="reqrd">*</span>
                                        <div class="">
                                            {!! Form::select("occupation",[''=>trans('general.selectOne')]+config('array.users_occupation'), null, ["class" => "form-control","placeholder"=> trans("users.occupation")]) !!}
                                            {!! $errors->first("occupation", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                    <div style="clear:both"></div>


                                    <div class="form-group  {{ $errors->has("terms") ? "has-error" : ""}}   col-sm-12">

                                        <label class="chk-block"><input type="checkbox" name="terms" value="1">{{trans('website.agreementText')}} </label>
                                        {!! $errors->first("terms", "<p class='help-block'>:message</p>") !!}

                                    </div>
                                    <hr> 
                                
                                 @if(isset($request->order_id))
                                {!! Form::hidden('order_id',$request->order_id) !!}
                                @endif

                                    <center><button type="submit" class="btn btn-info btn-lg">{{trans('website.submit')}}</button> </center>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                @include('website.partials.asideMenu')
            </div>
            {!! Form::close() !!}
        </div>


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
                                
				var lang	= "{{config("app.locale")}}";
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