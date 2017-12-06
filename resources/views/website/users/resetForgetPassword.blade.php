
@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    @include('website.partials.innerSearch',['title'=> trans('website.changepassword'),'img'=>'/assets/website/images/add_new_shop.png','icon'=>'fa fa-list'])
<!--,'title2'=>trans('website.signForm')-->


   <section class="inner-wrapper">
    <article class="container">
    
    <div class="content_wrapper">
        <!-- <div class="captions_sec">
            <div class="icon_in"><img src="images/add_new_shop.png" alt=""></div>
            
            <h6>Lorem Ipsum is simply dummy text of the printing</h6>
        </div> -->
        
        <section class="sub-wrapper">
            <div class="row">
            <div class="col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1">
                <div class="log-wrap">
                   {!! Form::open([]) !!}
                    @include('common.partials.messages')

                        <!-- <input type="text" placeholder="Current Password" class="text_box5"/> -->


                        <input type="password" class="text_box5" id="uLogin" placeholder="{{trans('website.password')}}" name="password">


                        <input type="password" class="text_box5" id="uLogin" placeholder="{{trans('website.confirmPassword')}}" name="confirmPassword">

                        
                        <button type="submit" class="submit_btn" >">{{trans('website.updatePass')}}
                        </button>
                        
                        
                        
                        
                          {!! Form::close()  !!}
                        
                    
                    
                    
                </div>
                
                
            </div>
            
            
            
        </div>
        </section>
        
        
    </div>


    </article>
</section>


@stop