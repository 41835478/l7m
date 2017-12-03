@extends('common.layouts.main')

@section('title', trans('general.payment_way'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.payment_way') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.payment_way') }}</a></li>
                        <li class="active">{{ trans('payment_way.payment_wayCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('payment_way.payment_way') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('payment_way.addpayment_way') }}</p>
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

                                {!! Form::model($request,['url' => '/admin/payment_way', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('payment_way.addpayment_way') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("restaurant_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("restaurant_id", trans("payment_way.restaurant_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("restaurant_id",$restaurantList, null, ["class" => "form-control","placeholder"=> trans("payment_way.restaurant_id")]) !!}
    {!! $errors->first("restaurant_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("payment_type") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("payment_type", trans("payment_way.payment_type"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("payment_type",config('array.payment_type'), null, ["class" => "form-control","placeholder"=> trans("payment_way.payment_type")]) !!}
    {!! $errors->first("payment_type", "<p class='help-block'>:message</p>") !!}
</div>
</div>



                                        <div class="form-group {{ $errors->has("commission") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("commission",trans('payment_way.commission'), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::text("commission", null, ["class" => "form-control","placeholder"=> '']) !!}
                                                {!! $errors->first("commission", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("type") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("type",trans('payment_way.type'), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("type",config('array.payment_way_commission_type'), null, ["class" => "form-control","placeholder"=> '']) !!}
                                                {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
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