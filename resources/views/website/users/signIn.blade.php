@extends('website.layouts.inner')
@section('title', Lang::get('website.createAccount'))
@section('content')

@include('website.partials.innerSearch',['title'=>trans('website.signIn'),'img'=>'/assets/website/images/sign-icon.png','icon'=>'fa fa-list'])
<!--,'title2'=>trans('website.signForm')-->



<section class="inner-wrapper">
    <article class="container">
    
    <div class="content_wrapper">
      <!--   <div class="captions_sec">     
            <h6>Lorem Ipsum is simply dummy text of the printing</h6>
        </div> -->
        
        <section class="sub-wrapper">
            <div class="row">
            <div class="col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1">
                <div class="log-wrap">
                    {!! Form::open(['id'=>'loginform' , 'class'=>'form-horizontal form-material']) !!}


                          @include('common.partials.messages')

                        <!-- <input type="text" placeholder="Username" class="text_box5"/> -->
                         {!! Form::text('email', null, ['class'=>'text_box5','placeholder'=>trans('user.email')]) !!}


                        <!-- <input type="password" placeholder="Password" class="text_box5"/> -->
                        {!! Form::password('password', ['class'=>'text_box5','placeholder'=>trans('user.password')]) !!}


                        <div class="sub-line">
                           <!--  <input type="checkbox"><label>Remember Me</label> -->
                            <a href="/recover">{{trans('website.forgetPassword')}}</a>
                        </div>
                        <!-- <input type="submit" class="submit_btn" value="LOGIN"> -->
                        <button class="submit_btn" type="submit">{{trans('user.login')}}</button>


                        <ul class="log-way">
                            <li><a href="#"><img src="/assets/website/images/facebook.png" alt="" title="facebook"></a></li>
                            <li><a href="#"><img src="/assets/website/images/twitter.png" alt="" title="twitter"></a></li>
                            <li><a href="#"><img src="/assets/website/images/google.png" alt="" title="google +"></a></li>
                        </ul>
                        
                        <div class="reg_link">Don't have an account ? <a href="/users/create">Register Now</a></div>
                        
                        
                        
                    </form>
                    
                    
                </div>
                
                
            </div>
            
            
            
        </div>
        </section>
        
        
    </div>


    </article>
</section>
@stop