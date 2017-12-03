@extends('common.layouts.main')

@section('title', trans('general.cms'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.cms') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.cms') }}</a></li>
                        <li class="active">{{ trans('cms.editcms') }}</li>
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
                        <h3 class="box-title m-b-0">{{ trans('cms.cms') }}</h3>
                        <p class="text-muted m-b-40">{{ trans('cms.editcms') }}</p>
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


                                {!! Form::model($cms, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/cms', $cms->id],
                                    'class' => 'form-horizontal'
                                ]) !!}







                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">{{ trans('cms.editcms') }}</span>
                                    </div>

                                    <div class="panel-body">




                                        

        <div class="form-group {{ $errors->has("title_en") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("title_en", trans("cms.title_en"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("title_en", null, ["class" => "form-control","placeholder"=> trans("cms.title_en")]) !!}
    {!! $errors->first("title_en", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("title_ar") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("title_ar", trans("cms.title_ar"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("title_ar", null, ["class" => "form-control","placeholder"=> trans("cms.title_ar")]) !!}
    {!! $errors->first("title_ar", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("alias") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("alias", trans("cms.alias"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("alias", null, ["class" => "form-control","placeholder"=> trans("cms.alias")]) !!}
    {!! $errors->first("alias", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("content_en") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("content_en", trans("cms.content_en"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("content_en", null, ["class" => "form-control","placeholder"=> trans("cms.content_en") ,'id'=>'editor1']) !!}
    {!! $errors->first("content_en", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("content_ar") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("content_ar", trans("cms.content_ar"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("content_ar", null, ["class" => "form-control","placeholder"=> trans("cms.content_ar") ,'id'=>'editor2']) !!}
    {!! $errors->first("content_ar", "<p class='help-block'>:message</p>") !!}
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