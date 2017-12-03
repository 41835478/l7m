
@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    @include('website.partials.innerSearch',['title'=>trans('website.forget').' <br><span>'.trans('website.password').'</span>','img'=>'/assets/website/images/contact-ico.png','icon'=>'fa fa-list'])



    <section class="inner_content_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="forgot-password col-sm-6 col-sm-offset-3">
                        {!! Form::open([]) !!}
                            <div class="form-group">

                                @include('common.partials.messages')

                                <label>{{trans('website.enterEmailToReset')}}</label>
                                <input type="text" class="form-control" id="uLogin" placeholder="{{trans('website.email')}}" name="email">
                                <hr>
                                <button type="submit" class="btn btn-primary">{{trans('website.submit')}}</button>
                            </div> <!-- /.form-group -->

                      {!! Form::close()  !!}

                    </div> <!-- /.modal-body -->

                </div>

            </div>
        </div>


    </section>


@stop