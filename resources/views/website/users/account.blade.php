@extends('website.layouts.inner')
@section('title', Lang::get('website.myprofile'))
@section('content')

    @include('website.partials.innerSearch',['title'=> trans('website.myAccount'),'img'=>'/assets/website/images/contact-icon.png','icon'=>'fa fa-list','title2'=>trans('website.create')])
<!--,'title2'=>trans('website.signForm')-->


<!-- asd -->

<style type="text/css">
    .pagination {
    display: inline-block;
    padding-left: 0;
    margin: 5px 0;
    border-radius: 4px;
}
</style>


   <!--  <section class="inner_content_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row tab-view">
                        <div class="tabbable-panel">
                            <div class="tabbable-line"> -->
                               <!--  <ul class="nav nav-tabs "> -->
                                   <!--  <li class="active">
                                        <a href="#tab_default_1" data-toggle="tab">
                                            {{trans('website.accountInformation')}} </a>
                                    </li> -->
                                 <!--    <li>
                                        <a href="#tab_default_2" data-toggle="tab">

                                             {{trans('website.deliveryAddress')}}  </a>
                                    </li> -->
                                  <!--   <li>
                                        <a href="#tab_default_3" data-toggle="tab">
                                            {{trans('website.orderSummary')}}  </a>
                                    </li> -->
                                 <!-- <li> <a href="#tab_default_4" data-toggle="tab">
                                            {{trans('website.changepassword')}}  </a> </li> -->


                               <!--  </ul> -->
                                <div >
                             
<section class="inner-wrapper">
    <article class="container">
    
    <div class="content_wrapper">
    <!--     <div class="captions_sec">
            <h6>
Welcome to My Account!<br>
Feel free to check, put or edit your information here as your preference.</h6>
        </div> -->
        
        
        <section class="acc_info">
            <div class="cap-t"><h5>{{trans('website.accountInformation')}}</h5> </div>
              {!! Form::model($oUsers, [
                                            'method' => 'PATCH',
                                            'url' => ['/users', $oUsers->id],
                                            'class' => 'form-horizontal ajaxForm'
                                        ]) !!}
                <div class="row personal-info">
                
                    <aside class="col-md-6 col-sm-6">
                       
                        <ul>
                           <!--  <li><span>First Name</span> sample name</li> -->
                         <li class=" {{ $errors->has("first_name") ? "has-error" : ""}}">
                            <span>
                                            {!! Form::label("first_name", trans("users.first_name"), []) !!}
                                        </span>
                                                {!! Form::text("first_name", null, ["placeholder"=> trans("users.first_name")]) !!}
                                                {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                                        </li>



                            <!-- <li><span>EMAIL  </span> sample@gmail.com</li> -->
                            <li class=" {{ $errors->has("email") ? "has-error" : ""}} ">
                                          <span>  {!! Form::label("email", trans("users.email"), []) !!}
                                          </span>
                                                {!! Form::text("email", null, ["placeholder"=> trans("users.email")]) !!}
                                                {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                                        </li>




                           <!--  <li><span>ADDRESS</span> Sample Place , Kuwait</li> -->
                           <li class="{{ $errors->has("address") ? "has-error" : ""}} ">
                                           <span> {!! Form::label("address", trans("users.address"), []) !!}
                                           </span>
                                                {!! Form::text("address", null, ["placeholder"=> trans("users.address")]) !!}
                                                {!! $errors->first("address", "<p class='help-block'>:message</p>") !!}
                                        </li>


                           <!--  <li><span>PASSWORD</span> ***************</li> -->
                             <li class=" {{ $errors->has("password") ? "has-error" : ""}} ">
                                          <span>  {!! Form::label("password", trans("users.password"), []) !!}
                                        </span>
                                                {!! Form::text("password", null, ["placeholder"=> trans("users.password")]) !!}
                                                {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                                        </li>



                        </ul>
                    </aside>

                    <aside class="col-md-6 col-sm-6">
                        <ul>
                            <!-- <li><span>lAST Name </span> sample name</li> -->
                             <li class=" {{ $errors->has("last_name") ? "has-error" : ""}} ">
                                       <span>     {!! Form::label("last_name", trans("users.last_name"), []) !!}
                                            </span>
                                                {!! Form::text("last_name", null, ["placeholder"=> trans("users.last_name")]) !!}
                                                {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                                        </li>


                           <!--  <li><span>PHONE NUMBER</span> +91 000 000 00</li> -->
                           <li class="{{ $errors->has("mobile") ? "has-error" : ""}} ">
                                         <span>   {!! Form::label("mobile", trans("users.mobile"), []) !!}
                                        </span>
                                                {!! Form::text("mobile", null, ["placeholder"=> trans("users.mobile")]) !!}
                                                {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                                        </li>



                            <!-- <li><span>COUNTRY</span> Kuwait</li> -->
                            <li class=" {{ $errors->has("area_id") ? "has-error" : ""}}  ">
               <span>     {!! Form::label("area_id", trans("users.area_id"), []) !!} 
                </span>
                        {!! Form::select("area_id",config('array.area_id'), null, ["placeholder"=> trans("users.area_id")]) !!}
                        {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                </li>



                         <!-- <li><span>CONFIRM PASSORD</span> ***************</li> -->
                         <li class=" {{ $errors->has("password_confirmation") ? "has-error" : ""}} ">
                                        <span>    {!! Form::label("password_confirmation", trans("users.password_confirmation"), []) !!}</span>
                                                {!! Form::text("password_confirmation", null, ["placeholder"=> trans("users.password_confirmation")]) !!}
                                                {!! $errors->first("password_confirmation", "<p class='help-block'>:message</p>") !!}
                                        </li>


                        </ul>
                    </aside>
                    
                    
                    
                    
                </div>
                <!-- <a href="#" class="edit_btn">EDIT ACCOUNT</a> -->
               {!! Form::submit(trans('website.update'),['class'=>'edit_btn']) !!}


                {!! Form::close() !!}
            </section>
        
        
        
        
        
        
        
    </div>


    </article>
</section>

                                    <!--deliveryAddress-->
                                  <!--    <div class="tab-pane" id="tab_default_2">
                                        <h3>{{trans('website.deliveryAddress')}}</h3>


                                        {!! Form::model($oAddress, [
                                            'method' => 'PATCH',
                                            'url' => ['/address', (isset($oAddress->id))? $oAddress->id:0],
                                            'class' => 'form-horizontal xxx_ajaxForm'
                                        ]) !!}


                                        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("name", trans("address.name"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("address.name")]) !!}
                                                {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("area_id") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("area_id", trans("website.area"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::select("area_id",[''=>trans('general.selectOne')]+$areaList, null, ["class" => "form-control","placeholder"=> trans("website.area")]) !!}
                                                {!! $errors->first("area_id", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>


                                        <div style="clear:both"></div>

                                        <div class="form-group col-sm-12 map-cvr">
                                            <input class="form-control" placeholder="Name" id="placeInput" type="text">
                                            <div  style="position:relative;" onclick="window.open('/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'', 'address map', 'width=1000,height=1000,status=yes');">
                                                <div style="position:absolute;left:0px;top:0px;background-color:rgba(255,255,255,0.1);height: 200px;width:100%;">  </div>
                                                <iframe  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe"src="" height="200px" width="100%"></iframe>
                                            </div>
                                            <div class="map clearfix">
                                                {{--<iframe  onclick="window.location.href='/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+''" id="insertAddressIframe"src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d187179.63669472354!2d47.53111409935966!3d29.33945907845681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!3m2!1d29.31166!2d47.481766!5e0!3m2!1sen!2sin!4v1488429901625" width="100%" height="100" frameborder="0" style="border:0" ></iframe>--}}
                                            </div>


                                            {!! Form::hidden('long',null,['id'=>'hiddenLongitudeInput']) !!}
                                            {!! Form::hidden('lat',null,['id'=>'hiddenLatitudeInput']) !!}

                                        </div>

                                        <div class="col-sm-6 radio">
                                            <div> <label><i class="fa fa-building" aria-hidden="true"></i> &ensp;&ensp;&ensp;&ensp;{!! Form::radio('type',0,null,[]) !!}  {{trans('website.appartment')}}</label>
                                                <label><i class="fa fa-home" aria-hidden="true"></i> &ensp;&ensp;&ensp;&ensp;{!! Form::radio('type',1,null,[]) !!}  {{trans('website.house') }}</label>
                                                <label><i class="fa fa-briefcase" aria-hidden="true"></i> &ensp;&ensp;&ensp;&ensp;{!! Form::radio('type',2,null,[]) !!}  {{trans('website.office')}}</label>

                                                {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("paci_number") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("paci_number", trans("website.paciNumber"), []) !!}
                                            <div class="col-xs-12">
                                                {!! Form::text("paci_number", null, ["class" => "form-control","placeholder"=> trans("website.paciNumber")]) !!}
                                                {!! $errors->first("paci_number", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div style="clear:both"></div>


                                        <div class="form-group {{ $errors->has("block") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("block", trans("address.block"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("block", null, ["class" => "form-control","placeholder"=> trans("address.block")]) !!}
                                                {!! $errors->first("block", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>


                                        <div class="form-group {{ $errors->has("street") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("street", trans("address.street"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("street", null, ["class" => "form-control","placeholder"=> trans("address.street")]) !!}
                                                {!! $errors->first("street", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div style="clear:both"></div>

                                        <div class="form-group {{ $errors->has("avenue") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("avenue", trans("address.avenue"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("avenue", null, ["class" => "form-control","placeholder"=> trans("address.avenue")]) !!}
                                                {!! $errors->first("avenue", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has("building") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("building", trans("address.building"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("building", null, ["class" => "form-control","placeholder"=> trans("address.building")]) !!}
                                                {!! $errors->first("building", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>


                                        <div style="clear:both"></div>

                                        <div class="form-group {{ $errors->has("floor") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("floor", trans("address.floor"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("floor", null, ["class" => "form-control","placeholder"=> trans("address.floor")]) !!}
                                                {!! $errors->first("floor", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("apartment_number") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("apartment_number", trans("address.apartment_number"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("apartment_number", null, ["class" => "form-control","placeholder"=> trans("address.apartment_number")]) !!}
                                                {!! $errors->first("apartment_number", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div style="clear:both"></div>

                                        <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("mobile", trans("address.mobile"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("address.mobile")]) !!}
                                                {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>


                                        <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
                                            {!! Form::label("phone", trans("address.phone"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("address.phone")]) !!}
                                                {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div style="clear:both"></div>




                                        <div class="form-group {{ $errors->has("directions") ? "has-error" : ""}}  col-xs-12">
                                            {!! Form::label("directions", trans("address.directions"), []) !!} ({{trans('website.optional')}})
                                            <div class="col-xs-12">
                                                {!! Form::textarea("directions", null, ["class" => "form-control","style"=>"height:100px;","type"=>"text","placeholder"=> trans("address.directions")]) !!}
                                                {!! $errors->first("directions", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                            <div class="clearfix"></div>

                                        <hr>
                                        <center>
                                            <button type="submit" name="add_address" value="1" data-toggle="modal" data-target="#myModal2" class="btn btn-info">{{trans('website.addNew')}}</button>
                                         @if(isset($request->selected_address_id))
                                            <button type="submit" name="edit_address" value="1" data-toggle="modal" data-target="#myModal2" class="btn btn-default">{{trans('website.edit')}}</button>
                                             <a href="/website/address/{{$request->selected_address_id}}" class="btn btn-default">  delete</a>
                                       @endif
                                       
                                      
                                        </center>

                                        {!! Form::close() !!}



                                        @if(count($oAddressResults))
                                            @foreach($oAddressResults as $oAddressResult)
                                        <a class="col-md-6 adrs-book" href="?selected_address_id={{$oAddressResult->id}}&#tab_default_2">
                                            <section>
                                                <strong>{{$oAddressResult->name}}</strong><br>
                                                {{$oAddressResult->area()->first()->{"name_".config('app.locale')} }}<br>
                                                {{$oAddressResult->block}}<br>
                                                {{$oAddressResult->first_name}} <br>
                                                {{$oAddressResult->street}}<br>
                                                {{$oAddressResult->avinue}}<br>
                                                {{$oAddressResult->building}}<br>
                                                {{$oAddressResult->floor}}<br>
                                                {{$oAddressResult->apartment_number}}<br>
                                                {{$oAddressResult->directions}} -->
                                                <!-- <hr>
                                               <div class="radio">
                          <label><input name="optradio" type="radio">Default Address</label>
                        </div>
                                            </section>
                                        </a>
@endforeach
                                        @endif

                                        <div class="clearfix"></div>


                                    </div> -->



                             <!--order summery-->
                                 <!--    <div class="tab-pane" id="tab_default_3">
                                        <h3>{{trans('website.orderSummary')}}</h3>
                                        <div id="accordion" class="panel-group ordr-smry">






                                            @if(count($oOrderResults))
                                                @foreach($oOrderResults as $oOrderResult)

                                            <div class="panel panel-default" style="clear:both;">
                                                <div class="panel-heading clearfix" style="background-color:{{config('array.order_status_color')[$oOrderResult->status]}} !important;" >
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$oOrderResult->id}}">

                                                         <img src=" {{ isset($oOrderResult->restaurant->img)? $oOrderResult->restaurant->img:'#' }}" alt="">


                                                        <strong> {{ isset($oOrderResult->restaurant->{'name_'.config('app.locale')})? $oOrderResult->restaurant->{'name_'.config('app.locale')}:'#' }}   @if(isset($oOrderResult->address->name)), {{$oOrderResult->address->name }}  @endif </strong>

                                                        {{$oOrderResult->created_at }}
                                        <span class="right">
                                            KD: {{$oOrderResult->total }}<br>
                                             {{trans('website.status')}} : {{config('array.order_status')[$oOrderResult->status] }}
                                        </span>
                                                    </a>

                                                </div>
                                                <div id="collapseOne{{$oOrderResult->id}}" class="panel-collapse collapse">
                                                    <div class="panel-body">


                                                     @if(isset($oOrderResult->cart ) )
{{--*/ $dishIds='';$dishQuantity=''; /*--}}
                                                         @foreach($oOrderResult->cart as $cart)
                                                                {{--*/ $dishIds.='&dish_id[]='.$cart->dish_id;
                                                                 $dishQuantity.='&quantity['.$cart->dish_id.']='.$cart->quantity;
                                                                 /*--}}
                                                        <h3><a href="/restaurant/{{$cart->restaurant_id}}"> {{$cart->restaurant->{'name_'.config('app.locale')}  }}</a></h3>
                                                        <table width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td>  {{trans('website.item')}} :</td>
                                                                <td>{{$cart->dish->{'name_'.config('app.locale')}  }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>  {{trans('website.quantity')}}  : </td>
                                                                <td>{{$cart->quantity }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>  {{trans('website.description')}} : </td>
                                                                <td>{{$oOrderResult->description  }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>  {{trans('website.reviewRating')}} :</td>
                                                                <td>{{$oOrderResult->rate  }} <div class="stars_main"> <div id="stars"   data-id="{{$cart->dish_id}}"  data-model="dish" data-rating="{{$cart->dish->rating}}"  class="starrr"> </div> </div></td>
                                                            </tr>
                                                            <tr>
                                                                <td>  {{trans('website.price')}} :</td>
                                                                <td>{{$cart->unit_price }}KD</td>
                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                        <hr>



                                                            @endforeach
                                                        @endif




                                                        <table width="100%">
                                                            <tbody>

                                                            <tr>
                                                            @if($oOrderResult->status == config('array.order_status_delivering_index'))
                                                                <td colspan="2"><button type="button" onclick="window.location.href='/admin/order-map?order_id={{$oOrderResult->id}}&track=1'" class="btn btn-info">{{trans('website.track')}}</button></td>
                                                            @elseif($oOrderResult->status == config('array.order_status_delivered_index'))
                                                                    <td colspan="2"><button type="button" onclick="window.location.href='/order/create?{{ $dishIds }}{{$dishQuantity}}&redirectToOrder={{$oOrderResult->id}}'" class="btn btn-info">{{trans('website.reorder')}}</button></td>

                                                                @elseif($oOrderResult->status == config('array.order_status_pending_index'))
                                                                    <td colspan="2"><button type="button" onclick="window.location.href='/restaurant/menuItem?restaurant_id={{ $oOrderResult->restaurant_id }}'" class="btn btn-info">{{trans('website.continue')}}  </button></td>


                                                                @else


<td  colspan="2">
    {{config('array.order_status')[$oOrderResult->status]}} </td>
                                                                @endif

                                                            </tr>

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>






                                            @endforeach
                           @endif




<div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $oOrderResults->appends(Input::except('page'))->appends($request->all())->render()) !!}
                                </div>










                                        </div>
                                    </div> -->
 <!--order summery-->



  <!-- change password div--> 
<!-- <div  class="tab-pane"  id="tab_default_4" >

  {!! Form::model($oUsers, [
                                            'method' => 'PATCH',
                                            'url' => ['/users', $oUsers->id],
                                            'class' => 'form-horizontal ajaxForm'
                                        ]) !!}



 <div class="form-group {{ $errors->has("password") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("password", trans("users.password"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8"  style="    margin-top: 16px;">
                        {!! Form::text("password", "", ["class" => "form-control","placeholder"=> trans("users.password")]) !!}
                        {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>

   <div style="clear:both"></div>

        <div class="form-group {{ $errors->has("password_confirmation") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("password_confirmation", trans("users.password_confirmation"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8" style="    margin-top: 16px;">
    {!! Form::text("password_confirmation", null, ["class" => "form-control","placeholder"=> trans("users.password_confirmation")]) !!}
    {!! $errors->first("password_confirmation", "<p class='help-block'>:message</p>") !!}
</div>
</div>

   <div style="clear:both"></div>
    {!! Form::submit(trans('website.save'),['class'=>'btn btn-default','style'=>'    float: right;']) !!}

   <div style="clear:both"></div>

















          <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6" style="display: none;">
                                            {!! Form::label("first_name", trans("users.first_name"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("users.first_name")]) !!}
                                                {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6" style="display: none;">
                                            {!! Form::label("last_name", trans("users.last_name"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("users.last_name")]) !!}
                                                {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6" style="display: none;">
                                            {!! Form::label("mobile", trans("users.mobile"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("users.mobile")]) !!}
                                                {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6" style="display: none;">
                                            {!! Form::label("phone", trans("users.phone"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                                {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("users.phone")]) !!}
                                                {!! $errors->first("phone", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div  class="form-group {{ $errors->has("gender") ? "has-error" : ""}}  col-xs-6" style="display: none;">
                                            {!! Form::label("gender", trans("users.gender"), []) !!}<span class="reqrd">*</span>
                                            <div class="col-xs-12">
                                            {!! Form::select("gender",config('array.users_gender'), null, ["class" => "form-control","placeholder"=> trans("users.gender")]) !!} 
-->
                                              <!--  <select name="gender" class="form-control" placeholder="trans("users.gender")">
                                                   
                                                   <option value="1">{{trans("website.female")}}</option>
                                                   <option value="0">{{trans("website.male")}}</option>
                                               </select> -->
                                          <!--      {!! $errors->first("gender", "<p class='help-block'>:message</p>") !!}




                                            </div>
                                        </div>
                                      



 {!! Form::close() !!}

 </div>
 -->
 <!-- change password div--> 



                      <!--           </div>
                            </div>
                        </div>
                    </div>
                </div> -->
               <!--  @include('website.partials.asideMenu') -->
          <!--   </div>
        </div>


    </section> -->




<?php
// todo this code to generat paci token please move this code to controller
// Added by ibtisam al-hitteh
// generate token
//create array of data to be posted
$data = array('username' => 'SahalatUser', 'password' => '$ah@lat697', 'client' => 'requestip', 'expiration' => '20160', 'f' => 'pjson' , 'php_master' => true);
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://kuwaitportal.paci.gov.kw/arcgis/sharing/generateToken", 
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_POST => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data 
));
$response = curl_exec($curl);               
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
    //echo $response;
    $obj = json_decode($response , true);
    $token = $obj['token'];
}
?>

@stop

@section('script')
@parent
    <script>
        var hash = location.hash.substr(1);
        if(hash.length > 0){
            $('a[href="#'+hash+'"]').click();
        }
    </script>

    <script>
        $('#insertAddressIframe').attr('src','/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'')
    </script>
    
    <script>
        // By Ibtisam alhitteh
        $(document).ready(function(){
            $("#paci_number").blur(function(){
                            var toke ;
                                                         $.ajax({
                        type: 'POST',
                        
                        url : '{{route('getpacitoken')}}',
                        
                        success:function(data){
                                            var token   = data;
                var civilId = $('#paci_number').val();
                                
                var lang    = "{{config("app.locale")}}";
                fields_empty();
                var civilId_len = civilId.length;
                if(civilId_len==8)
                    paci_geocoder_by_civilId(token , civilId ,lang);
                else
                    console.log("CivilId error");

                        },
                        timeout:10000
                    });

            });
                        
            // Empty fields in form
            function fields_empty(){
                //paci_number
                $("#paci_number").val("");
                //block
                $("#block").val("");
                //street
                $("#street").val("");
                //avenue
                $("#avenue").val("");
                //building
                $("#building").val("");
                //floor
                $("#floor").val("");
                //apartment_number
                $("#apartment_number").val("");
                // directions
                $('#directions').val("");
            }
            
            function paci_geocoder_by_civilId (token , civilId , lang){
                $.ajax({
                   url: 'https://kuwaitportal.paci.gov.kw/arcgisportal/rest/services/Hosted/PACIGeocoder/FeatureServer/0/query?where=civilid='+civilId+'&returnGeometry=false&f=pjson&token='+token+'&outFields=*',
                   data: {civilid:'', returnGeometry:"false", token:'',  f:"pjson" , outFields:"*"},
                   error: function() {
                      $('#info').html('<p>An error has occurred</p>');
                   },
                   dataType: 'json',
                   success: function(data) { 
                    try {
                      var result = jQuery.parseJSON(JSON.stringify(data)); 
                      if(result.error){
                          console.log("Code: "+result.error.code);
                          console.log("Message: "+result.error.message);
                          console.log("Details: "+result.error.details);
                          console.log("URL: "+'https://kuwaitportal.paci.gov.kw/arcgisportal/rest/services/Hosted/PACIGeocoder/FeatureServer/0/query?where=civilid='+civilId+'&returnGeometry=false&f=pjson&token='+token+'&outFields=*');
                      }else{
                           var features = jQuery.parseJSON(JSON.stringify(result.features[0]));
                           if(lang=="en"){
                                parcing_data_en(features.attributes);
                           }else{
                                parcing_data_ar(features.attributes);
                           }
                      }
                    }
                    catch(err) {
                        console.log(err.message);
                    }
                   },
                   type: 'GET'
                });
                
            }
    
            function parcing_data_en (data){
                //paci_number
                $("#paci_number").val(data.civilid);
                //block
                $("#block").val(data.blockenglish);
                //street
                $("#street").val(data.streetenglish);
                //avenue
                $("#avenue").val(data.neighborhoodenglish);
                //building
                $("#building").val(data.buildingnameenglish);
                //floor
                //floor
                $("#floor").val(data.floor_no);
                //apartment_number      
                $("#apartment_number").val(data.unit_no);
                // directions
                $('#directions').val(data.location);
            }
    
            function parcing_data_ar (data){
                //paci_number
                $("#paci_number").val(data.civilid);
                //block
                $("#block").val(data.blockarabic);
                //street
                $("#street").val(data.streetarabic);
                //avenue
                $("#avenue").val(data.neighborhoodarabic);
                //building
                $("#building").val(data.buildingnamearabic);
                //floor
                $("#floor").val(data.floor_no);
                //apartment_number      
                $("#apartment_number").val(data.unit_no);
                //location
                $('#directions').val(data.location);
            }
        });

    </script>
    @stop