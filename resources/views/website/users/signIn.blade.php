@extends('website.layouts.inner')
@section('title', Lang::get('website.createAccount'))
@section('content')

@include('website.partials.innerSearch',['title'=>trans('website.signIn'),'img'=>'/assets/website/images/sign-icon.png','icon'=>'fa fa-list'])
<!--,'title2'=>trans('website.signForm')-->


<section class="inner-wrapper">
  <article class="container">
  
  <div class="content_wrapper">
    <!-- <div class="captions_sec">
      <div class="icon_in"><img src="/assets/website/images/sign-icon.png" alt=""></div>
      
      <h6>Lorem Ipsum is simply dummy text of the printing</h6>
    </div> -->
    
    <section class="sub-wrapper">
      <div class="row">
      <div class="col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1">
        <div class="log-wrap">
          {!! Form::open(['id'=>'loginform' ]) !!}
           <!--  <input type="text" placeholder="Username" class="text_box5"/> -->
            {!! Form::text('email', null, ['class'=>'text_box5','placeholder'=>trans('user.email')]) !!}
          <!--   <input type="password" placeholder="Password" class="text_box5"/> -->
          {!! Form::password('password', ['class'=>'text_box5','placeholder'=>trans('user.password')]) !!}
            <div class="sub-line">
              <input type="checkbox"><label>Remember Me</label>
              <a href="/recover">Forgot Password</a>
            </div>
            <button type="submit" class="submit_btn" >{{trans('user.signIn')}}</button>
            
            <ul class="log-way">
              <li><a href="#"><img src="/assets/website/images/facebook.png" alt="" title="facebook"></a></li>
              <li><a href="#"><img src="/assets/website/images/twitter.png" alt="" title="twitter"></a></li>
              <li><a href="#"><img src="/assets/website/images/google.png" alt="" title="google +"></a></li>
            </ul>
            
            <div class="reg_link">Don't have an account ? <a href="/user/create">Register Now</a></div>
            
            
            {!! Form::close() !!}
       
          
          
        </div>
        
        
      </div>
      
      
      
    </div>
    </section>
    
    
  </div>


  </article>
</section>

   
    @stop