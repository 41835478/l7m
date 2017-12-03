@extends('common.layouts.main')

@section('title', trans('general.restaurant_area'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.restaurant_area') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.restaurant_area') }}</a></li>
                        <li class="active">{{ trans('restaurant_area.restaurant_areaCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('restaurant_area.restaurant_area') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('restaurant_area.addrestaurant_area') }}</p>
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

                                {{--*/

                                $request->merge(['deliver_time_from'=>'08:00','deliver_time_to'=>'18:00:00']);/*--}}
                                {!! Form::model($request,['url' => '/admin/restaurant_area', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('restaurant_area.addrestaurant_area') }}</span>
                                    </div>

                                    <div class="panel-body">


<!-- 
                                        <div class="form-group {{ $errors->has("governrate_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("governrate_id", trans("general.governrate"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("governrate_id",$governorateList, null, ["class" => "form-control","placeholder"=> trans("restaurant.governrate_id")]) !!}
                                                {!! $errors->first("governrate_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div> -->

                                        <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("area_id", trans("general.area"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("area_id",$areaList, null, ["class" => "form-control","placeholder"=> trans("restaurant.area_id")]) !!}
                                                {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

    

        <div class="form-group {{ $errors->has("restaurant_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("restaurant_id", trans("general.restaurant"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("restaurant_id",$restaurantList, null, ["class" => "form-control","placeholder"=> trans("restaurant_area.restaurant_id")]) !!}
    {!! $errors->first("restaurant_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    <div class="clearfix"></div>

        <div class="form-group {{ $errors->has("delivery_charges") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("delivery_charges", trans("restaurant_area.delivery_charges"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("delivery_charges", null, ["class" => "form-control","placeholder"=> trans("restaurant_area.delivery_charges")]) !!}
    {!! $errors->first("delivery_charges", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("sahalat_charge") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("sahalat_charge", trans("restaurant_area.sahalat_charge"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("sahalat_charge", null, ["class" => "form-control","placeholder"=> trans("restaurant_area.sahalat_charge")]) !!}
    {!! $errors->first("sahalat_charge", "<p class='help-block'>:message</p>") !!}
</div>
</div>


                                        <div class="clearfix"></div>

        <div class="form-group {{ $errors->has("min_amount") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("min_amount", trans("restaurant_area.min_amount"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("min_amount", null, ["class" => "form-control","placeholder"=> trans("restaurant_area.min_amount")]) !!}
    {!! $errors->first("min_amount", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("deliver_time_from") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("deliver_time_from", trans("restaurant_area.deliver_time_from"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8  input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
    {!! Form::text("deliver_time_from", null, ["class" => "form-control","placeholder"=> trans("restaurant_area.deliver_time_from")]) !!}
    {!! $errors->first("deliver_time_from", "<p class='help-block'>:message</p>") !!}
</div>
</div>


                                        <div class="clearfix"></div>

        <div class="form-group {{ $errors->has("deliver_time_to") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("deliver_time_to", trans("restaurant_area.deliver_time_to"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8  input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
    {!! Form::text("deliver_time_to", null, ["class" => "form-control","placeholder"=> trans("restaurant_area.deliver_time_to")]) !!}
    {!! $errors->first("deliver_time_to", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("restaurant_area.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.restaurant_area_status'), null, ["class" => "form-control","placeholder"=> trans("restaurant_area.status")]) !!}
    {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
</div>
</div>


                                        <div class="clearfix"></div> 
        <div class="form-group {{ $errors->has("governorate_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("governorate_id", trans("restaurant_area.governorate_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("governorate_id",$governorateList, null, ["class" => "form-control","placeholder"=> trans("restaurant_area.governorate_id")]) !!}
    {!! $errors->first("governorate_id", "<p class='help-block'>:message</p>") !!}
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
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script> 

            
            $(function(ready){
               
    $('#governrate_id').change(function() {
        
         $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'GET',
                        
                        url : '{{route('addSkills')}}',
                        data : {governrate_id : $(this).val()},
                        success:function(data){
                            var html='<option value="all">Select all areas</option>';
                        for(x in data)
                            {
                             html+= "<option value='"+x+"'>"+data[x]+"</option>";
                        }
                        
                           document.getElementById("area_id").innerHTML=html;
                        

                        },
                        timeout:10000
                    });
                    
    });
});
</script>
@endsection
