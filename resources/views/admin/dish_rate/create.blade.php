@extends('common.layouts.main')

@section('title', trans('general.dish_rate'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.dish_rate') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.dish_rate') }}</a></li>
                        <li class="active">{{ trans('dish_rate.dish_rateCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('dish_rate.dish_rate') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('dish_rate.adddish_rate') }}</p>
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

                                {!! Form::model($request,['url' => '/admin/dish_rate', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('dish_rate.adddish_rate') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("users_id", trans("general.users"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("users_id",$usersList, null, ["class" => "form-control","placeholder"=> trans("dish_rate.users_id")]) !!}
    {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>




                                        <div class="form-group {{ $errors->has("dish_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("dish_id", trans("general.dish"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("dish_id",$dishList, null, ["class" => "form-control","placeholder"=> trans("general.dish")]) !!}
                                                {!! $errors->first("dish_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("rate") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("rate", trans("dish_rate.rate"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("rate", null, ["class" => "form-control","placeholder"=> trans("dish_rate.rate")]) !!}
    {!! $errors->first("rate", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("description") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("description", trans("dish_rate.description"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("description", null, ["class" => "form-control","placeholder"=> trans("dish_rate.description")]) !!}
    {!! $errors->first("description", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("dish_rate.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.dish_rate_status'), null, ["class" => "form-control","placeholder"=> trans("dish_rate.status")]) !!}
    {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("notification") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("notification", trans("dish_rate.notification"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("notification",config('array.dish_rate_notification'), null, ["class" => "form-control","placeholder"=> trans("dish_rate.notification")]) !!}
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