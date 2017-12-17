
@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    @include('website.partials.innerSearch',['title'=>trans('website.forgetPassword'),'img'=>'/assets/website/images/add_new_shop.png','icon'=>'fa fa-list','title2'=>trans('website.forgetPass')])
    <!--,'title2'=>trans('website.signForm')-->


<section class="inner-wrapper">
    <article class="container">
    
    <div class="content_wrapper">
   <!--      <div class="captions_sec">
            <div class="icon_in"><img src="images/add_new_shop.png" alt=""></div>
            
            <h6>Simply provide us your email address , you have entered at the time of registration. <br/>
We'll send your password to the Email Address.</h6>
        </div> -->
        
        <section class="sub-wrapper">
            <div class="row">
            <div class="col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1">
                <div class="log-wrap">
                     {!! Form::open([]) !!}

                     @include('common.partials.messages')

                     <!--    <input type="password" placeholder="Email Address" class="text_box5"/> -->
                        
                   <input type="text" class="text_box5" id="uLogin" placeholder="{{trans('website.emailAddress')}}" name="email">


                        <!-- <input type="submit" class="submit_btn" value="SUBMIT"> -->
                        
                         <button type="submit" class="submit_btn">{{trans('website.submit')}}</button>
                        

                     {!! Form::close()  !!}
                    
                </div>
                
                
            </div>
            
            
            
        </div>
        </section>
        
        
    </div>


    </article>
</section>


@stop