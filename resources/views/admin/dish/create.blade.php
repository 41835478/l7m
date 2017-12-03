@extends('common.layouts.main')

@section('title', trans('general.dish'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.dish') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.dish') }}</a></li>
                        <li class="active">{{ trans('dish.dishCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('dish.dish') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('dish.adddish') }}</p>
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
$current_date=\Carbon\Carbon::now()->format('Y-m-d');
$request->merge(['available_from'=>$current_date,'available_to'=>$current_date]);/*--}}
                                {!! Form::model($request,['url' => '/admin/dish', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('dish.adddish') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("name_en") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name_en", trans("dish.name_en"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name_en", null, ["class" => "form-control","placeholder"=> trans("dish.name_en")]) !!}
    {!! $errors->first("name_en", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    



        <div class="form-group {{ $errors->has("best_seller") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("best_seller", trans("dish.best_seller"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
 {!! Form::select("best_seller",[0 =>'no',1 =>'yes'], null, ["class" => "form-control","placeholder"=> trans("dish.best_seller")]) !!}
    {!! $errors->first("best_seller", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    


    

        <div class="form-group {{ $errors->has("name_ar") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name_ar", trans("dish.name_ar"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name_ar", null, ["class" => "form-control","placeholder"=> trans("dish.name_ar")]) !!}
    {!! $errors->first("name_ar", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("restaurant_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("restaurant_id", trans("general.restaurant"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("restaurant_id",$restaurantList, null, ["class" => "form-control","placeholder"=> trans("dish.restaurant_id")]) !!}
    {!! $errors->first("restaurant_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("cuisine_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("cuisine_id", trans("general.cuisine"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("cuisine_id",$cuisineList, null, ["class" => "form-control","placeholder"=> trans("dish.cuisine_id")]) !!}
    {!! $errors->first("cuisine_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("menu_section_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("menu_section_id", trans("general.menu_section"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("menu_section_id",$menuSectionList, null, ["class" => "form-control","placeholder"=> trans("dish.menu_section_id")]) !!}
    {!! $errors->first("menu_section_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("category_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("category_id", trans("general.category"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("category_id",array_merge(['' => 'Please Select Category'], $categoryList), null, ["class" => "form-control","placeholder"=> trans("dish.category_id")]) !!}
    {!! $errors->first("category_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>
      <div class="form-group {{ $errors->has("preparation_time") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("preparation_time", trans("dish.preparation_time"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("preparation_time", null, ["class" => "form-control","placeholder"=> trans("dish.preparation_time")]) !!}
    {!! $errors->first("preparation_time", "<p class='help-block'>:message</p>") !!}
</div>
</div>
          <div class="form-group {{ $errors->has("nutrition_facts") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("nutrition_facts", trans("dish.nutrition_facts"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("nutrition_facts", null, ["class" => "form-control","placeholder"=> trans("dish.nutrition_facts")]) !!}
    {!! $errors->first("nutrition_facts", "<p class='help-block'>:message</p>") !!}
</div>
</div>  

          <div class="form-group {{ $errors->has("ingredients") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("ingredients", trans("dish.ingredients"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("ingredients", null, ["class" => "form-control","placeholder"=> trans("dish.ingredients")]) !!}
    {!! $errors->first("ingredients", "<p class='help-block'>:message</p>") !!}
</div>
</div>  
                                        
<!--           <div class="form-group {{ $errors->has("preparation_time") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("preparation_time", trans("dish.preparation_time"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("preparation_time", null, ["class" => "form-control","placeholder"=> trans("dish.preparation_time")]) !!}
    {!! $errors->first("preparation_time", "<p class='help-block'>:message</p>") !!}
</div>
</div>  
     -->

        <div class="form-group {{ $errors->has("delivery_menu_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("delivery_menu_id", trans("general.delivery_menu"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("delivery_menu_id",$deliveryMenuList, null, ["class" => "form-control","placeholder"=> trans("dish.delivery_menu_id")]) !!}
    {!! $errors->first("delivery_menu_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("parent_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("parent_id", trans("general.parent"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("parent_id", null, ["class" => "form-control","placeholder"=> trans("dish.parent_id")]) !!}
    {!! $errors->first("parent_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("price") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("price", trans("dish.price"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("price", null, ["class" => "form-control","placeholder"=> trans("dish.price")]) !!}
    {!! $errors->first("price", "<p class='help-block'>:message</p>") !!}
</div>
</div>


                                        <div class="form-group {{ $errors->has("price_befor") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("price_befor", trans("dish.price_befor"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("price_befor", null, ["class" => "form-control","placeholder"=> trans("dish.price_befor")]) !!}
                                                {!! $errors->first("price_befor", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>
        <div class="form-group {{ $errors->has("quantity") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("quantity", trans("dish.quantity"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("quantity", null, ["class" => "form-control","placeholder"=> trans("dish.quantity")]) !!}
    {!! $errors->first("quantity", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("img") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("img", trans("dish.img"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("img", null, ["class" => "form-control uploadFile","placeholder"=> trans("dish.img")]) !!}
    {!! $errors->first("img", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("discount") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("discount", trans("dish.discount"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("discount", null, ["class" => "form-control","placeholder"=> trans("dish.discount")]) !!}
    {!! $errors->first("discount", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("available_from") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("available_from", trans("dish.available_from"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("available_from", null, ["class" => "form-control mydatepicker","placeholder"=> trans("dish.available_from")]) !!}
    {!! $errors->first("available_from", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("available_to") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("available_to", trans("dish.available_to"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("available_to", null, ["class" => "form-control mydatepicker","placeholder"=> trans("dish.available_to")]) !!}
    {!! $errors->first("available_to", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("description_en") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("description_en", trans("dish.description_en"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("description_en", null, ["class" => "form-control","placeholder"=> trans("dish.description_en")]) !!}
    {!! $errors->first("description_en", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("description_ar") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("description_ar", trans("dish.description_ar"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("description_ar", null, ["class" => "form-control","placeholder"=> trans("dish.description_ar")]) !!}
    {!! $errors->first("description_ar", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("dish.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.dish_status'), null, ["class" => "form-control","placeholder"=> trans("dish.status")]) !!}
    {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
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