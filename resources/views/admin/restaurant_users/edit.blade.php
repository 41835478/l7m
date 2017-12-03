@extends('common.layouts.main')

@section('title', trans('general.restaurant_users'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.restaurant_users') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.restaurant_users') }}</a></li>
                        <li class="active">{{ trans('restaurant_users.editrestaurant_users') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>



            <div class="row">


                <div class="col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">{{ trans('restaurant_users.restaurant_users') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('restaurant_users.editrestaurant_users') }}</p>
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


                                {!! Form::model($restaurant_users, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/restaurant_users', $restaurant_users->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('restaurant_users.editrestaurant_users') }}</span>
                                    </div>

                                    <div class="panel-body">







                                        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("users_id", trans("restaurant_users.users"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("users_id",$usersList, null, ["class" => "form-control","placeholder"=> trans("restaurant_users.users_id")]) !!}
                                                {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("restaurant_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("restaurant_id", trans("restaurant_users.restaurant"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("restaurant_id",$restaurantList, null, ["class" => "form-control","placeholder"=> trans("restaurant_users.restaurant_id")]) !!}
                                                {!! $errors->first("restaurant_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>




                                        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("restaurant_users.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.restaurant_users_status'), null, ["class" => "form-control","placeholder"=> trans("restaurant_users.status")]) !!}
    {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("type") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("type", trans("restaurant_users.type"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("type",config('array.restaurant_users_type'), null, ["class" => "form-control","placeholder"=> trans("restaurant_users.type")]) !!}
    {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

                                        <div class="form-group">
                                            <div class="col-sm-offset-9 col-sm-3">
                                                {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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