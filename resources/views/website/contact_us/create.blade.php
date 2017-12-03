@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    @include('website.partials.innerSearch',['title'=>'Contact <br><span>Us</span>','img'=>'/assets/website/images/contact-ico.png','icon'=>'fa fa-list'])






    <section class="inner_content_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="full-width contact clearfix">
                        <div class="full-width border-top clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 for-small"><img src="/assets/website/images/address.png" alt="address" />{{trans('website.address')}}  </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7 for-small"><span>{{trans('website.sahalatAddressText')}}</span></div>
                        </div><!-- /.border-top -->

                        <div class="full-width border-top clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 for-small"><img src="/assets/website/images/phone.png" alt="phone" />{{trans('website.phoneNumberLabel')}}  </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7 for-small"><span>{{trans('website.sahalatPhoneNumber')}}</span></div>
                        </div><!-- /.border-top -->

                        <div class="full-width border-top clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 for-small"><img src="/assets/website/images/email.png" alt="Email" />{{trans('website.emailIdLabel')}} </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7 for-small"><span>{{trans('website.sahalatEmailText')}} </span></div>
                        </div><!-- /.border-top -->






                        {!! Form::model($request,['url' => '/contact_us', 'class' => 'form-horizontal ajaxForm contact-form-ara']) !!}





                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">{{ trans('contact_us.addcontact_us') }}</span>
                            </div>

                            <div class="panel-body">



<div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
                                    {!! Form::label("name", trans("contact_us.name"), ["class" => "col-sm-4 control-label"]) !!}
                                    <div class="col-sm-8">
                                        {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("contact_us.name")]) !!}
                                        {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>






                                <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
                                    {!! Form::label("email", trans("contact_us.email"), ["class" => "col-sm-4 control-label"]) !!}
                                    <div class="col-sm-8">
                                        {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("contact_us.email")]) !!}
                                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>






                                <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
                                    {!! Form::label("phone", trans("contact_us.phone"), ["class" => "col-sm-4 control-label"]) !!}
                                    <div class="col-sm-8">
                                        {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("contact_us.phone")]) !!}
                                        {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>



                                <div class="form-group {{ $errors->has("comments") ? "has-error" : ""}}  col-xs-12">
                                    {!! Form::label("comments", trans("contact_us.comments"), ["class" => "col-sm-12"]) !!}
                                    <div class="col-sm-12">
                                        {!! Form::textarea("comments", null, ["class" => "form-control","placeholder"=> trans("contact_us.comments")]) !!}
                                        {!! $errors->first("comments", "<p class='help-block'>:message</p>") !!}
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
                @include('website.partials.asideMenu')
            </div>
        </div>


    </section>


@stop