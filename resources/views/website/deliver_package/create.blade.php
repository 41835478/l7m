@extends('common.layouts.main')

@section('title', trans('general.deliver_package'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.deliver_package') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.deliver_package') }}</a></li>
                        <li class="active">{{ trans('deliver_package.deliver_packageCreate') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('deliver_package.deliver_package') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('deliver_package.adddeliver_package') }}</p>
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

                                {!! Form::model($request,['url' => '/website/deliver_package', 'class' => 'form-horizontal']) !!}





                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('deliver_package.adddeliver_package') }}</span>
                                    </div>

                                    <div class="panel-body">



                                        

        <div class="form-group {{ $errors->has("deliver_number") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("deliver_number", trans("deliver_package.deliver_number"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("deliver_number", null, ["class" => "form-control","placeholder"=> trans("deliver_package.deliver_number")]) !!}
    {!! $errors->first("deliver_number", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("price") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("price", trans("deliver_package.price"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("price", null, ["class" => "form-control","placeholder"=> trans("deliver_package.price")]) !!}
    {!! $errors->first("price", "<p class='help-block'>:message</p>") !!}
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