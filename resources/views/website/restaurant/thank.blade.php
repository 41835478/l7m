@extends('website.layouts.inner')
@section('title', Lang::get('website.allrestaurants'))
@section('content')

    @include('website.partials.innerSearch',['title'=>' <span>'.trans('website.restaurants').'</span>','img'=>'/assets/website/images/current_order.png','icon'=>'fa fa-list','request'=>$request,'title2'=>trans('website.titles')])
<!--,'title2'=>trans('website.signForm')-->












    <section class="inner_content_area">
        <div class="container">
            <div class="row">

                <div class="jumbotron text-xs-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead">We Will Contact You As Soon As Possible </p>
  <hr>
  <p>
    <a href="/contact_us/create">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="/" role="button">Continue to homepage</a>
  </p>
</div>



            </div>
        </div>


    </section>












@stop