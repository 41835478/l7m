@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    @include('website.partials.innerSearch',['title'=> $oCms->{'title_'.config('app.locale')} ,'img'=>'/assets/website/images/'.$oCms->alias.'-ico.png','icon'=>'fa fa-list'])


<div class="container">
<div class="main-wrapper">
{!! $oCms->{'content_'.config('app.locale')} !!}

</div>

</div>
@stop

@section('script')
    @parent
    <script>


        getLocation();
    </script>
    @stop