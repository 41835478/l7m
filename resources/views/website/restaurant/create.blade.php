@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    @include('website.partials.innerSearch',['title'=>trans('website.restaurants'),'img'=>'/assets/website/images/add_new_shop.png','icon'=>'fa fa-list','title2'=>trans('website.resturantCreate')])
<!--,'title2'=>trans('website.signForm')-->




 <section class="inner-wrapper">
    <article class="container">
      <div class="content_wrapper">
       <!--  <div class="captions_sec">
          <h2> Add L7m Shop</h2>
          <h6>To join our corporation, please fill in the forms below and we will contact you as soon as possible</h6>
        </div> -->
        <section class="sub-wrapper">
          <div class="add-new-shop-wrap">
            <div class="row">
                 {!! Form::model($request,[
                        'url'=>'/restaurant'
                        ]) !!}

                        @include ('common/partials/messages')

              <aside class="col-md-4 col-sm-4">
               <!--  <input type="text" class="text_box5" placeholder="First Name"> -->
               <input class="text_box5" placeholder="{{trans('website.firstName')}}" name="Owner_first_name" type="text">
              </aside>

              <aside class="col-md-4 col-sm-4">
                <!-- <input type="text" class="text_box5" placeholder="Last Name"> -->
                 <input class="text_box5" placeholder="{{trans('website.lastName')}}"  name="Owner_last_name"type="text">
              </aside>

              <aside class="col-md-4 col-sm-4">
                <!-- <input type="text" class="text_box5" placeholder="Telephone"> -->
                 <input class="text_box5" placeholder="{{trans('website.telephone')}}" name="telephone" type="text">
              </aside>

              <aside class="col-md-4 col-sm-4">
               <!--  <input type="text" class="text_box5" placeholder="Email Adress"> -->
               <input class="text_box5" placeholder="{{trans('website.email')}}" type="text" name="email">
              </aside>

              <aside class="col-md-4 col-sm-4">
              <!--   <input type="text" class="text_box5" placeholder="Cuisines"> -->
              <input class="text_box5" placeholder="{{trans('website.cuisines')}}" name="cuisines" type="text">
              </aside>

              <aside class="col-md-4 col-sm-4">
               <!--  <input type="text" class="text_box5" placeholder="L7M Name"> -->
                <input class="text_box5" placeholder="{{trans('website.nameL7m')}}" type="text" name="name_en">
              </aside>

              <aside class="col-md-12">
                <!-- <textarea class="text_box2" placeholder="L7M Details"></textarea> -->
                <textarea class="text_box2" placeholder="{{trans('website.l7mDetails')}}"  name="description_en"></textarea>
              </aside>

            </div>


            <div class="sub-line">
              <input type="checkbox">
              <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </label>
            </div>
            <div class="row">
              <aside class="col-md-6 col-sm-6">
               <!--  <input class="subt_btn pull-right" value="Reset" type="reset"> -->
               <button type="reset" class="subt_btn pull-right">{{trans('website.reset')}}</button>
              </aside>

              <aside class="col-md-6 col-sm-6">
               <!--  <input class="subt_btn" value="Submit" type="submit"> -->
               <button type="submit" class="subt_btn">{{trans('website.submit')}}</button>
              </aside>

            </div>
             {!! Form::close() !!}
          </div>
          <!--    @include('website.partials.asideMenu') -->
        </section>
        
        
      </div>
    </article>
  </section>





@stop