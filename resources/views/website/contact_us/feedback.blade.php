@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.feedback'))
@section('content')

    @include('website.partials.innerSearch',['title'=>'feedback <br><span></span>','img'=>'/assets/website/images/contact-ico.png','icon'=>'fa fa-list'])
<!--,'title2'=>trans('contact_us.feedbackForm')-->




<section class="inner-wrapper">
    <article class="container">
    
    <div class="content_wrapper">
    <!--     <div class="captions_sec">
            <div class="icon_in"><img src="images/feedback-icon.png" alt=""></div>
            
            <h6>
Thank you for reaching us,<br>
please feel free to stay in touch with us by sharing your feedback or any enquiry you have. </h6>
        </div> -->
        
        
        <section class="sub-wrapper">
            <div class="feedbck">
            <div class="row">
            <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                
                <div class="row">
                      <form method="post" action="{{ action('website\contact_us\ContactUs@feedbackemail') }}">
                        
                            <div class="col-md-6">
                               <!-- <label>NAME</label><input type="text" class="text_box1">  -->
                                 <div class=" {{ $errors->has("name") ? "has-error" : ""}}  ">
                                    {!! Form::label("name", trans("contact_us.name")) !!}
                                    <div class="">
                                        {!! Form::text("name", null, ["class" => "text_box1"]) !!}
                                        {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>
                                
                            </div>



                            <div class="col-md-6">
                               <!--  <label>E-mail</label><input type="text" class="text_box1"> -->
                               <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  ">
                                    {!! Form::label("email", trans("contact_us.email")) !!}
                                    <div >
                                        {!! Form::email("email", null, ["class" => "text_box1"]) !!}
                                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>

                            </div>
                            


                            <div class="col-md-12">
                              <!-- <label>DETAILS</label><textarea class="text_box2"></textarea> 
                                -->
                                   <div class="form-group {{ $errors->has("comments") ? "has-error" : ""}}  ">
                                    {!! Form::label("comments", trans("contact_us.comments")) !!}
                                    <div >
                                        {!! Form::textarea("comments", null, ["class" => "text_box2"]) !!}
                                        {!! $errors->first("comments", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>

                            </div>



                </div>
                <div class="row">
                    <aside class="col-md-6 col-sm-6">{!! Form::reset('Reset', ['class' => 'subt_btn pull-right']) !!}</aside>
                    <aside class="col-md-6 col-sm-6"> {!! Form::submit('Submit', ['class' => 'subt_btn']) !!}</aside>

                </div>
                </form>
                
                
                
                
            </div>
            </div>
            </div>
        </section>
        
        
        
       {{--  @include('website.partials.asideMenu') --}}
        
        
        
    </div>


    </article>
</section>


@stop