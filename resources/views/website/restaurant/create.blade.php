@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    @include('website.partials.innerSearch',['title'=>trans('website.addRestaurantHtml'),'img'=>'/assets/website/images/add-ico.png','icon'=>'fa fa-list'])






    <section class="inner_content_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12"><strong class="vilt">{{trans('website.toJoinUsText')}} </strong></div>
                        <hr>

                        {!! Form::model($request,[
                        'url'=>'/restaurant'
                        ]) !!}

                        @include ('common/partials/messages')

                            <div class="form-group col-md-6">
                                <label>{{trans('website.firstName')}}<span class="reqrd">*</span></label>
                                <input class="form-control" placeholder="{{trans('website.firstName')}}" name="Owner_first_name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{trans('website.lastName')}}  <span class="reqrd">*</span></label>
                                <input class="form-control" placeholder="{{trans('website.lastName')}}"  name="Owner_last_name"type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{trans('website.name')}} <span class="reqrd">*</span></label>
                                <input class="form-control" placeholder="{{trans('website.name')}}" type="text" name="name_en">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{trans('website.address')}}  <span class="reqrd">*</span></label>
                                <textarea class="form-control" placeholder="{{trans('website.address')}} " name="address_en" type="text"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{trans('website.telephone')}} <span class="reqrd">*</span></label>
                                <input class="form-control" placeholder="{{trans('website.telephone')}}" name="telephone" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label> {{trans('website.email')}}<span class="reqrd">*</span></label>
                                <input class="form-control" placeholder="{{trans('website.email')}}" type="text" name="email">
                            </div>
                            <div  class="hidden" {{ $errors->has("notification") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("notification", trans("restaurant.notification"), ["class" => "col-sm-4 control-label"]) !!}
                                            <div class="col-sm-8">
                                                {!! Form::select("notification",config('array.restaurant_notification'), null, ["class" => "form-control","placeholder"=> trans("restaurant.notification")]) !!}
                                                {!! $errors->first("notification", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                            <div class="clearfix"></div>

                        <hr>
                        <center><button type="submit" class="btn btn-primary btn-lg">{{trans('website.submit')}}</button> </center>
                        {!! Form::close() !!}
                    </div>
                </div>

                @include('website.partials.asideMenu')
            </div>
        </div>


    </section>





@stop