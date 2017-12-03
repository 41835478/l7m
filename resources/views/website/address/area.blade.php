@extends('website.layouts.inner')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')

    @include('website.partials.innerSearch',['title'=>' <span>'.trans('website.allgov').'</span>','img'=>'/assets/website/images/location-ico.png','icon'=>'fa fa-list','request'=>$request])

<section class="inner_content_area">
<div class="container">
<div class="row">
	<div class="col-sm-9">
		<div class="row">



			@if (count($areaList))




 @foreach($areaList as $areaList)


<div class="col-sm-4 col-md-3">
				<span class="location">
					<a href="/restaurant?area_id={{$areaList->id}}">{{ $areaList->{'name_'.config('app.locale')}  }}</a>
				</span>
			</div>
			

 @endforeach




@endif
			
			
			
			
			
			
		</div><!-- end of the row -->





    </div>
    <div class="col-sm-3">
    	<section class="in-section">
        	<h3>IN THIS SECTION</h3>
            <ul>
            	<li><a class="active" href="#">Menues will be here</a></li>
                <li><a href="#">Menues will be here</a></li>
                <li><a href="#">Menues will be here</a></li>
                <li><a href="#">Menues will be here</a></li>
                <li><a href="#">Menues will be here</a></li>
                <li><a href="#">Menues will be here</a></li>
            </ul>
        </section>
    </div>
    
</div>
</div>


</section>






@stop