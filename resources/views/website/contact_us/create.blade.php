@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

   @include('website.partials.innerSearch',['title'=>trans('website.contact_us'),'img'=>'/assets/website/images/contact-icon.png','icon'=>'fa fa-list','title2'=>trans('website.contact')])

<!--,'title2'=>trans('contact_us.contactForm')-->
   <!-- <article class="container">
        <div class="inn_caption">
              <h2>{{trans('website.contact_us')}}</h2>
        </div>
    </article> -->



    <section class="inner-wrapper">
    <article class="container">
    
    <div class="content_wrapper">
        <!-- <div class="captions_sec">
                    <div class="icon_in"><img src="/assets/website/images/contact-icon.png" alt="img"></div>
                        <h6>Thank you for reaching us, please feel free to stay in touch with us by sharing your feedback or any enquiry you have. 
Your request will be send to the consultant and they will be in touch with you soon.</h6>
                </div> -->


<section class="sub-wrapper">
            
                <div class="row">
                <aside class="col-md-4">
                    <div class="contct">
                    <h1>{!!trans('website.addressInfo')!!}</h1>
                    <div class="cnt-wrap">
                        <ul>
                            <li><div class="icons"><img src="/assets/website/images/contact-icon1.png" alt=""></div>{!!trans('website.l7mAddressText')!!}</li>  
                            <li><div class="icons"><img src="/assets/website/images/contact-icon2.png" alt=""></div>{{trans('website.l7mPhoneNumber')}}</li>
                            <li><div class="icons"><img src="/assets/website/images/contact-icon3.png" alt=""></div>{{trans('website.l7mPhoneNumber')}}</li>
                            <li><div class="icons"><img src="/assets/website/images/contact-icon4.png" alt=""></div><a href="mailto:info@l7m.com">{{trans('website.l7mEmailText')}}</a></li>
                            <li><div class="icons"><img src="/assets/website/images/contact-icon3.png" alt=""></div>{!!trans('website.Hotline')!!} </li>
                        </ul>
                    </div>  
                    </div>
                </aside>
                
                <aside class="col-md-8">

                    {!! Form::model($request,['url' => '/contact_us', 'class' => 'form-horizontal ajaxForm contact-form-ara']) !!}

                    <div class="contct feed-bck">
                    <h1>{!! trans('contact_us.inquiryForm') !!}</h1>
                        <div class="row">
                            <div class="col-md-6">
                               <!--  <form>
                                    <label>NAME</label><input type="text" class="text_box1">
                                    <label>E-mail</label><input type="text" class="text_box1">
                                    <label>phone number</label><input type="text" class="text_box1">
                                </form> -->


                                     <div class=" {{ $errors->has("name") ? "has-error" : ""}}  ">
                                    {!! Form::label("name", trans("contact_us.name")) !!}
                                    <div class="">
                                        {!! Form::text("name", null, ["class" => "text_box1"]) !!}
                                        {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>






                                <div class=" {{ $errors->has("email") ? "has-error" : ""}}  ">
                                    {!! Form::label("email", trans("contact_us.email")) !!}
                                    <div class="">
                                        {!! Form::text("email", null, ["class" => "text_box1"]) !!}
                                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>






                                <div class=" {{ $errors->has("phone") ? "has-error" : ""}}  ">
                                    {!! Form::label("phone", trans("contact_us.phone")) !!}
                                    <div class="">
                                        {!! Form::text("phone", null, ["class" => "text_box1"]) !!}
                                        {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>


                            </div>
                            
                            <div class="col-md-6">
                               <!--  <form> -->
                                  <!--   <label>DETAILS</label><textarea class="text_box2"></textarea> -->
                                    
                                    
                                        <div class=" {{ $errors->has("comments") ? "has-error" : ""}}  ">
                                    {!! Form::label("comments", trans("contact_us.comments")) !!}
                                    <div class="">
                                        {!! Form::textarea("comments", null, ["class" => "text_box2"]) !!}
                                        {!! $errors->first("comments", "<p class='help-block'>:message</p>") !!}
                                    </div>
                                </div>


                                 {!! Form::reset('RESET', ['class' => 'subt_btn']) !!}
                                {!! Form::submit('SUBMIT', ['class' => 'subt_btn pull-right']) !!}

                              <!--   </form> -->
                            </div>

                        </div>
                    </div>
                     {!! Form::close() !!}
                </aside>
                    
                     <!--  @include('website.partials.asideMenu') -->
                    
                    
                
                </div>
            
        </section>


</div>
</article>
    </section>


@stop