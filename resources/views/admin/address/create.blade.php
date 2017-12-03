@extends('common.layouts.main')

@section('title', trans('general.address'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.address') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.address') }}</a></li>
                        <li class="active">{{ trans('address.addressCreate') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" method="get" action="" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>









            <div class="row">


                <div class="col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">{{ trans('address.address') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('address.addaddress') }}</p>
                        <!-- Nav tabs -->

                        @include ('common/partials/messages')
                        <ul class="nav nav-tabs" role="tablist">


                            <li role="presentation" class="active">
                                <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.basic')}}</span></a>
                            </li>



                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">


                            <div role="tabpanel" class="tab-pane active" id="idetail">

                                {!! Form::model($request,['url' => '/admin/address', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('address.addaddress') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("users_id", trans("address.users_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("users_id",$usersList, null, ["class" => "form-control","placeholder"=> trans("address.users_id")]) !!}
    {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("area_id", trans("address.area_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("area_id",$areaList, null, ["class" => "form-control","placeholder"=> trans("address.area_id")]) !!}
    {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name", trans("address.name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("address.name")]) !!}
    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("type") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("type", trans("address.type"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("type",config('array.address_type'), null, ["class" => "form-control","placeholder"=> trans("address.type")]) !!}
    {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("first_name", trans("address.first_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("address.first_name")]) !!}
    {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("last_name", trans("address.last_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("address.last_name")]) !!}
    {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("pacl_number") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("pacl_number", trans("address.pacl_number"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("pacl_number", null, ["class" => "form-control","placeholder"=> trans("address.pacl_number")]) !!}
    {!! $errors->first("pacl_number", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("block") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("block", trans("address.block"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("block", null, ["class" => "form-control","placeholder"=> trans("address.block")]) !!}
    {!! $errors->first("block", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("street") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("street", trans("address.street"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("street", null, ["class" => "form-control","placeholder"=> trans("address.street")]) !!}
    {!! $errors->first("street", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    
<!-- 
        <div class="form-group {{ $errors->has("judda") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("judda", trans("address.judda"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("judda", null, ["class" => "form-control","placeholder"=> trans("address.judda")]) !!}
    {!! $errors->first("judda", "<p class='help-block'>:message</p>") !!}
</div>
</div>
 -->
    

        <div class="form-group {{ $errors->has("avenue") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("avenue", trans("address.avenue"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("avenue", null, ["class" => "form-control","placeholder"=> trans("address.avenue")]) !!}
    {!! $errors->first("avenue", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("building") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("building", trans("address.building"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("building", null, ["class" => "form-control","placeholder"=> trans("address.building")]) !!}
    {!! $errors->first("building", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("floor") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("floor", trans("address.floor"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("floor", null, ["class" => "form-control","placeholder"=> trans("address.floor")]) !!}
    {!! $errors->first("floor", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("apartment_number") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("apartment_number", trans("address.apartment_number"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("apartment_number", null, ["class" => "form-control","placeholder"=> trans("address.apartment_number")]) !!}
    {!! $errors->first("apartment_number", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("mobile", trans("address.mobile"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("address.mobile")]) !!}
    {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("phone", trans("address.phone"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("address.phone")]) !!}
    {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("long") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("long", trans("address.long"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("long", null, ["class" => "form-control","placeholder"=> trans("address.long")]) !!}
    {!! $errors->first("long", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("lat") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("lat", trans("address.lat"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("lat", null, ["class" => "form-control","placeholder"=> trans("address.lat")]) !!}
    {!! $errors->first("lat", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("directions") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("directions", trans("address.directions"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("directions", null, ["class" => "form-control","placeholder"=> trans("address.directions")]) !!}
    {!! $errors->first("directions", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("default") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("default", trans("address.default"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("default",config('array.address_default'), null, ["class" => "form-control","placeholder"=> trans("address.default")]) !!}
    {!! $errors->first("default", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("notification") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("notification", trans("address.notification"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("notification",config('array.address_notification'), null, ["class" => "form-control","placeholder"=> trans("address.notification")]) !!}
    {!! $errors->first("notification", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    





                                        <div class="form-group">
                                            <div class="col-sm-offset-9 col-sm-3">
                                                {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {!! Form::close() !!}

                            </div>

                        </div>
                    </div>
                </div>

            </div>







        </div>
    </div>
@endsection

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
			$("#pacl_number").blur(function(){
                            
				var token   = "<?=$token?>";
				var civilId = $('#pacl_number').val();
                                
				var lang	= "{{config("app.locale")}}";
				fields_empty();
				var civilId_len = civilId.length;
				if(civilId_len==8)
					paci_geocoder_by_civilId(token , civilId ,lang);
				else
					console.log("CivilId error");
			});
	
			// Empty fields in form
			function fields_empty(){
				//pacl_number
				$("#pacl_number").val("");
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
				$("#pacl_number").val(data.civilid);
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
				$("#pacl_number").val(data.civilid);
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
