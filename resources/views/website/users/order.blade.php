@extends('website.layouts.inner')
@section('title', Lang::get('website.checkout'))
@section('content')

    @include('website.partials.innerSearch',['title'=>trans('website.orderConfirmationHtml'),'img'=>'/assets/website/images/cart-icon.png','icon'=>'fa fa-list','title2'=>trans('website.titles')])

<style type="text/css">
    
    #search_rest_icon{
            margin-top: -47px !important;
    }
</style>

    <section class="inner_content_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12 order-conform clearfix">
                            <section class="clearfix">
                                <div class="heading">1.  {{trans('website.deliveryInformation')}}



                                {!! Form::model($request,['method'=>'get','id'=>'selectAddressForm','class'=>'pull-right left1']) !!}
                                {!! Form::select('selected_address_id',$addressList,null,['onchange'=>'$("#selectAddressForm").submit();']) !!}
                              {!! Form::hidden('order_id',null) !!}
                                {!! Form::close() !!}
                        </div>


                                @if (isset($validationErrors) && isset($validationErrors['deliver_area']))

                                    <div class="alert alert-danger alert-dark">
                                        <button data-dismiss="alert" class="close" type="button">�</button>
                                        {!! $validationErrors['deliver_area'] !!}
                                    </div>

                                @endif


                                <div class="col-xs-12">

                                    {!! Form::model($oAddress, [
                                        'method' => 'PATCH',
                                        'url' => '/address/0',
                                        'class' => 'form-horizontal  ajaxForm'
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
                                            <label><i class="fa fa-home" aria-hidden="true"></i> &ensp;&ensp;&ensp;&ensp;{!! Form::radio('type',1,null,[]) !!}  {{trans('website.house')}} </label>
                                            <label><i class="fa fa-briefcase" aria-hidden="true"></i> &ensp;&ensp;&ensp;&ensp;{!! Form::radio('type',2,null,[]) !!}  {{trans('website.office')}}  </label>

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
                                        {!! Form::label("block", trans("website.block"), []) !!}<span class="reqrd">*</span>
                                        <div class="col-xs-12">
                                            {!! Form::text("block", null, ["class" => "form-control","placeholder"=> trans("website.block")]) !!}
                                            {!! $errors->first("block", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("street") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("street", trans("website.street"), []) !!}<span class="reqrd">*</span>
                                        <div class="col-xs-12">
                                            {!! Form::text("street", null, ["class" => "form-control","placeholder"=> trans("website.street")]) !!}
                                            {!! $errors->first("street", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                    <div style="clear:both"></div>

                                    <div class="form-group {{ $errors->has("avenue") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("avenue", trans("website.Avenue"), []) !!}<span class="reqrd">*</span>
                                        <div class="col-xs-12">
                                            {!! Form::text("avenue", null, ["class" => "form-control","placeholder"=> trans("website.Avenue")]) !!}
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
                                        {!! Form::label("floor", trans("website.floor"), []) !!}<span class="reqrd">*</span>
                                        <div class="col-xs-12">
                                            {!! Form::text("floor", null, ["class" => "form-control","placeholder"=> trans("website.floor")]) !!}
                                            {!! $errors->first("floor", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has("apartment_number") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("apartment_number", trans("website.apartment_number"), []) !!}<span class="reqrd">*</span>
                                        <div class="col-xs-12">
                                            {!! Form::text("apartment_number", null, ["class" => "form-control","placeholder"=> trans("website.apartment_number")]) !!}
                                            {!! $errors->first("apartment_number", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>



                                    <div style="clear:both"></div>

                                    <div class="form-group {{ $errors->has("mobile") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("mobile", trans("website.mobile"), []) !!}<span class="reqrd">*</span>
                                        <div class="col-xs-12">
                                            {!! Form::text("mobile", null, ["class" => "form-control","placeholder"=> trans("website.mobile")]) !!}
                                            {!! $errors->first("mobile", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has("phone") ? "has-error" : ""}}  col-xs-6">
                                        {!! Form::label("phone", trans("website.phone"), []) !!}<span class="reqrd">*</span>
                                        <div class="col-xs-12">
                                            {!! Form::text("phone", null, ["class" => "form-control","placeholder"=> trans("website.phone")]) !!}
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
                                        <input type="hidden" name="add_address" value="1">
                                        <button type="submit" name="add_address" value="1" data-toggle="modal" data-target="#myModal2" class="btn btn-info">{{trans('website.addNew')}}</button>

                                    </center>

                                    {!! Form::close() !!}


                                </div>
                            </section>






                            <section class="clearfix">

                                @if (isset($validationErrors) && isset($validationErrors['deliver_area']))

                                        <div class="alert alert-danger alert-dark">
                                            <button data-dismiss="alert" class="close" type="button">�</button>
                                            {!! $validationErrors['deliver_area'] !!}
                                        </div>

                                @endif
                                <div class="heading">{{trans('website.availableArea')}} {{$oRestaurant->{'name_'.config('app.locale')} }} </div>
                                <div class="row">

                                    <div class="col-sm-12">

                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <th> {{trans('website.area')}}</th>
                                                <th> {{trans('website.minimumAmount')}}</th>
                                                <th>{{trans('website.deliveryCharge')}}</th>
                                                {{--<th>Sahalat charge</th>--}}
                                                <th>{{trans('website.deliverTimeFrom')}}</th>
                                                <th>{{trans('website.deliverTimeTo')}}</th>

                                                <th>{{trans('website.openDays')}}</th>
                                                <th></th>
                                            </tr>


                                            @if( count($oRestaurant->restaurant_area) )
                                                @foreach($oRestaurant->restaurant_area as $area)


                                                    <tr>
                                                        <td>{{$area->area->{'name_'.config('app.locale')} }}</td>
                                                        <td>{{$area->min_amount}}</td>
                                                        <td>{{$area->delivery_charges}}</td>

                                                        {{-- <td>{{$area->sahalat_charge}}</td>--}}

                                                        <th>{{$area->deliver_time_from}}</th>
                                                        <th>{{$area->deliver_time_to}}</th>
                                                        <td>

                                                            @if(count($area->operation_hour))
                                                                @foreach($area->operation_hour as $oneDay)
 - {{ (array_key_exists($oneDay->day,config('array.days')))? config('array.days')[$oneDay->day]:$oneDay->day }}

                                                                @endforeach
                                                                @else
                                                               {{trans('website.allDays')}}
                                                            @endif
                                                        </td>
                                                        <td></td>
                                                    </tr>





                                                @endforeach
                                            @else



                                                <tr>
                                                    <td>{{$oRestaurant->area->{'name_'.config('app.locale')} }}</td>
                                                    <td>{{$oRestaurant->min_amount}}</td>
                                                    <td>{{$oRestaurant->deliver_charge}}</td>
                                                    <td>{{$oRestaurant->deliver_time_from}}</td>
                                                    <td>{{$oRestaurant->deliver_time_to}}</td>
                                                    <td>{{config('project.deliver_charge')}}</td>
                                                    <td>

                                                        {{trans('website.allDays')}}
                                                    </td>
                                                    <td></td>
                                                </tr>


                                            @endif


                                            </tbody>
                                        </table>


                                    </div>
                                </div>


                            </section>















                            <section class="clearfix">
                                <div class="heading">2. {{trans('website.orderSummary')}} @if(isset($oAddress->name))( {{trans('website.deliverTo')}} {{$oAddress->name}} )@endif </div>
                                <div class="row">

                                    <div class="col-sm-12">

                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="itemTable">
                                            <tbody>
                                            <tr>
                                                <th>{{trans('website.itemName')}}</th>
                                                <th>{{trans('website.qty')}}</th>
                                                <th>{{trans('website.price')}}</th>
                                                <th>{{trans('website.total')}}</th>
                                                <th></th>
                                            </tr>



                        <a href="/restaurant/menuItem?restaurant_id={{$oRestaurant->id}}" class="btn btn-primary" style="float: right;"> {{trans('website.addMore')}}  </a>
                                            {{--*/ $total=0;/*--}}
                                            @if(count($oOrder))
                                                    @foreach($oOrder->cart as $cart)


                                                        <tr>
                                                            <td>{{$cart->dish->{'name_'.config('app.locale')} }}</td>
                                                            <td>


                                                                {!! Form::model($cart, [
                                                                    'method' => 'PATCH',
                                                                    'url' => ['/cart', $cart->id],
                                                                    'class' => 'form-horizontal right1'
                                                                ]) !!}
                                                                {!! Form::text('quantity',null,['class'=>'','style'=>'width:40px;padding:0px ; height:22px; text-align:center; margin:0px;float:left;'])  !!}

<button type="submit" style="width:30px; height:22px;padding:0px; margin:0px;float:left;"><i class="fa fa-refresh"></i></button>
                                                              {!! Form::close() !!}



                                                            </td>
                                                            <td>{{$cart->unit_price}} KD </td>
                                                            <td>{{ floatval($cart->unit_price) * floatval($cart->quantity)}} KD</td>
                                                            <td>
                                                                <a href="/cart/delete/{{$cart->id}}"><b>X</b></a>

                                                            </td>
                                                        </tr>



                                                        {{--*/ $total+=floatval($cart->unit_price) * floatval($cart->quantity);/*--}}


                                                @endforeach
                                            @endif


                                            </tbody>
                                        </table>

                                        {!! Form::model($request,['method'=>'get']) !!}
                                        <table class="grnt-totl" width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td>{{trans('website.subTotal')}} : <strong>KD {{$total}}</strong> </td>
                                                {{--<td>SAHALAT CHARGES: <strong>KD {{$sahalat_deliver_charge}}</strong></td>--}}
                                                <td> {{trans('website.restaurantTotal')}}: <strong>KD {{ floatval($total)+floatval($restaurant_deliver_charge)}}</strong></td>
                                                <td>{{trans('website.discount')}}: <strong>KD {{$totalDiscount}}</strong></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="form-group  {{ $errors->has("directions") ? "has-error" : ""}}   col-sm-12">
                                            <label> {{trans('website.generalRequest')}}</label>
                                            <div>
                                            {!! Form::textarea('note',null,['class'=>'form-control','type'=>'text','placeholder'=>trans('website.generalRequest'),'cols'=>'','rows'=>'']) !!}

                                                {!! $errors->first("note", "<p class='help-block'>:message</p>") !!}
                                            </div>
                                            </div>



                                        @if($offline_order)
                                        <div class="heading" style="clear:both;">
                                            {{$oRestaurant->{'name_'.config('app.locale')} }} {{trans('website.acceptOrderWhenClose')}} {{$order_accept_days}} {{trans('website.days')}}  </div>
@endif

                                        <div class="form-group  {{ ($errors->has("deliver_time") || $errors->has("selected_time"))? "has-error" : ""}}  col-sm-12">
                                            <label  class="col-xs-12"> {{trans('website.orderTime')}} <span class="reqrd">*</span></label>
                                            <label class="col-xs-12"><input name="nowTime" type="checkbox" checked value="1" onchange="if($(this).prop('checked')){$('.selectTimeDrop').hide();}else{$('.selectTimeDrop').show();}">{{trans('website.now')}}</label>
                                        <div class="col-xs-6 selectTimeDrop"  style="display: none;">
                                              {!!  Form::select('selected_day',$available_days,null,['onchange'=>'changeDeliverTimeList($(this));','id'=>'selectDayList','class'=>'form-control'])  !!}
          



                                            {!! $errors->first("deliver_time", "<p class='help-block'>:message</p>") !!}
                                        </div>
                                            <div class="col-xs-6 selectTimeDrop" style="display: none;">
                                            {!! Form::select('selected_time',[],null,['id'=>'selectTimeList','class'=>'form-control'])  !!}

                                                {!! $errors->first("deliver_time", "<p class='help-block'>:message</p>") !!}

                                            </div>
                                            {!! Form::hidden('selected_address_id',null)  !!}
                                            {!! Form::hidden('order_id',null)  !!}


                                        </div>

                                    </div>
                                </div>



















                            </section>







        @if(isset(current_user()->getUser()->id ) && current_user()->getUser()->type==config('array.users_type_guest_index'))

<section class="clearfix"> 

     <div class="heading"> {{trans('website.gesutinf')}}</div>
                        <div class="row" style="" id="guestLoginBox">
                        

                                        <div class="log_fill">
                                            <span style="color:#ff0000" id="guest_first_name_error"></span>
                                            <div>

                                                {!! Form::text('users_name','',['placeholder'=>trans('website.fullName'),'class'=>'form-control ']) !!}
                                            </div>
                                        </div>
                                        <div class="log_fill">
                                            <span style="color:#ff0000" id="guest_phone_error"></span>
                                            <div>
                                                {!! Form::text('users_phone','',['placeholder'=>trans('website.Phone'),'class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="log_fill">
                                            <span style="color:#ff0000" id="guest_email_error"></span>
                                            <div>

                                                {!! Form::email('users_email','',['placeholder'=>trans('website.emailAddress'),'class'=>'form-control']) !!}
                                            </div>

                                        </div>

                                   
                     
                                </div>

                        
                           


                             </section>
                    @endif





































                            <section class="clearfix">
                                <div class="heading">3. {{trans('website.confirmYourOrder')}}</div>
                                <div class="row">

                                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                                        <div class="row radio">


                                            <label> {!! Form::radio('payment_type',config('array.payment_type_cash_index'),(!isset($request->payment_type)? true:null),[]) !!} <img src="/assets/website/images/payment-cash.png" alt=""></label>
                                            <label> {!! Form::radio('payment_type',config('array.payment_type_knet_index'),null,[]) !!} <img src="/assets/website/images/knet.jpg" alt=""></label>
                                            <label> {!! Form::radio('payment_type',config('array.payment_type_visa_index'),null,[]) !!} <img src="/assets/website/images/payment-card.png" alt=""></label>
                                        </div>

                                        <table class="grnt-totl2" width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td>{{trans('website.subTotal')}} :  </td>
                                                <td><strong>KD {{$total}}</strong></td>
                                            </tr>
                                            {{--<tr>--}}
                                                {{--<td>SAHALAT CHARGES: </td>--}}
                                                {{--<td><strong>KD {{$sahalat_deliver_charge}}</strong></td>--}}
                                            {{--</tr>--}}

                                            <tr>
                                                <td>{{trans('website.restaurantTotal')}} : </td>
                                                <td><strong>KD {{ $restaurant_deliver_charge  }}</strong></td>
                                            </tr>
                                            <hr>
                                            <tr>
                                                <td>{{trans('website.total')}} : </td>
                                                <td><strong>KD {{floatval($total) + floatval($restaurant_deliver_charge)}}{{-- + $sahalat_deliver_charge --}}</strong></td>
                                            </tr>

                                            <tr>
                                                <td>{{trans('website.discount')}} :  </td>
                                                <td><strong>KD {{ $totalDiscount }}</strong></td>
                                            </tr>

                                            <tr>
                                                <td>{{trans('website.totalWithDiscount')}}: </td>
                                                <td><strong>KD {{floatval($total) + floatval($restaurant_deliver_charge) -floatval($totalDiscount) }}{{-- + $sahalat_deliver_charge --}}</strong></td>
                                            </tr>

                                            </tbody>
                                        </table>


                                    </div>
                                </div>

                                @if (isset($validationErrors) && count($validationErrors))
                                    @foreach ($validationErrors as $error)
                                        <div class="alert alert-danger alert-dark">
                                            <button data-dismiss="alert" class="close" type="button">�</button>
                                            {!! $error !!}
                                        </div>
                                    @endforeach

                                @endif

                                <center><button class="btn btn-info btn-lg" name="proceedToPayment" value="save" type="submit">{{trans('website.submit')}}</button></center>
                            </section>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            <!--     @include('website.partials.asideMenu') -->
            </div>
        </div>


    </section>




@stop

@section("script")
@parent

<script>
    var available_deliver_times={!! json_encode($available_deliver_times) !!};

    if(typeof available_deliver_times['today'] != "undefined"){
         $('#selectDayList').prepend('<option value="today">Today</option>');

        for(var i=0;i<available_deliver_times['today'].length;i++){

            $('#selectTimeList').append('<option value="'+available_deliver_times['today'][i]+'">'+available_deliver_times['today'][i]+'</option>');
        }
    }else{
        for(var index  in available_deliver_times){

            for(var i=0;i<available_deliver_times[index].length;i++){

                $('#selectTimeList').append('<option value="'+available_deliver_times[index][i]+'">'+available_deliver_times[index][i]+'</option>');
            }
            break;
        }
    }

    function changeDeliverTimeList(selectDayList){
        var index =selectDayList.val();
        $('#selectTimeList').html('');

        for(var i=0;i<available_deliver_times[index].length;i++){

            $('#selectTimeList').append('<option value="'+available_deliver_times[index][i]+'">'+available_deliver_times[index][i]+'</option>');
        }
    }

    $('#insertAddressIframe').attr('src','/selectAddressFromMap?latitude='+$('#hiddenLatitudeInput').val()+'&longitude='+$('#hiddenLongitudeInput').val()+'')

</script>


@stop
<?php
// todo this code to generat paci token please move this code to controller
// Added by ibtisam al-hitteh
// generate token
//create array of data to be posted
$data = array('username' => 'SahalatUser', 'password' => '$ah@lat697', 'client' => 'requestip', 'expiration' => '20190', 'f' => 'pjson' , 'php_master' => true);
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

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
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
                                
				var lang	= "{{config("app.locale")}}";
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
				//pacl_number
				$("#paci_number").val("");
                                $("#block").val("");
				//street
				$("#street").val("");
				//avenue
				$("#avenue").val("");
				//building
				$("#building").val("");
				//floor
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
                        
				//pacl_number
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
				//pacl_number
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
        
