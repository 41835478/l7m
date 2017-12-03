@extends('common.layouts.main')
@section('title', trans('general.order'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.order.show');
    $canEdit=canAccess('admin.order.edit');
    $canDestroy=canAccess('admin.order.destroy');
    $canCreate=canAccess('admin.order.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.order') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.order') }}</a></li>
                        <li class="active">{{ trans('general.order') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>









            {{--*/$current_year=\Carbon\Carbon::now()->format('Y');
                           $totalOrder=$totalOrder ==0 ? 1:$totalOrder;
                           /*--}}
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="ti-restaurantping-cart text-success"></i> Order Received </h3>
                        <div class="text-right"> <span class="text-muted">{{$current_year}} Order</span>
                            <h1><sup><i class="ti-arrow-up text-success"></i></sup> {{$totalOrder}}</h1>
                        </div>
                        <span class="text-success">{{round(($totalOrder -$pendingOrder)/$totalOrder *100,3) }}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{($totalOrder -$pendingOrder)/$totalOrder*100 }}%;"> <span class="sr-only">{{round(($totalOrder -$pendingOrder)/$totalOrder*100,3) }}% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="ti-cut text-danger"></i> Rejected Orders</h3>
                        <div class="text-right"> <span class="text-muted">rejected orders {{$current_year}}</span>
                            <h1><sup><i class="ti-arrow-down text-danger"></i></sup> {{$rejectOrder}}</h1>
                        </div>
                        <span class="text-danger">{{round(($rejectOrder)/$totalOrder *100,3) }}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{($rejectOrder)/$totalOrder *100 }}%;"> <span class="sr-only">{{round(($rejectOrder)/$totalOrder *100,3) }}% </span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="ti-wallet text-info"></i> Payed Orders</h3>
                        <div class="text-right"> <span class="text-muted">payed orders {{$current_year}}</span>
                            <h1><sup><i class="ti-arrow-up text-info"></i></sup> {{$payedOrder}}</h1>
                        </div>
                        <span class="text-info">{{ round(($payedOrder)/$totalOrder *100,3) }}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{($payedOrder)/$totalOrder *100 }}%;"> <span class="sr-only">{{ round(($payedOrder)/$totalOrder *100,3) }}% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="ti-stats-up"></i>Pending Orders</h3>
                        <div class="text-right"> <span class="text-muted">pending order {{$current_year}}</span>
                            <h1><sup><i class="ti-arrow-up text-inverse"></i></sup> {{$pendingOrder}}</h1>
                        </div>
                        <span class="text-inverse">{{round(($pendingOrder)/$totalOrder *100,3) }}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{($pendingOrder)/$totalOrder *100 }}%;"> <span class="sr-only">{{ round(($pendingOrder)/$totalOrder *100,3) }}% </span> </div>
                        </div>
                    </div>
                </div>
            </div>















            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">



                        @include('common.partials.messages')

                        <div class=" col-xs-4">
                            <h3 class="box-title m-b-0">{{ trans('order.orderTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('order.orderTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                            <div class="col-xs-2">
                                <a  href="{{route('admin.order.create')}}"class="btn btn-primary form-control  ">
                                    + {{trans('order.orderCreate')}}
                                </a>

                            </div>
                        @endif


                        <div class="col-xs-2">

                                             
<a  href="{{route('admin.order.chart')}}?{{http_build_query($request->all())}}" class="btn btn-primary form-control  ">
                                <i class="fa fa-map" ></i>&ensp; Chart
                            </a>

                             
                            
                        </div>

                        <div class="col-xs-2">


                            <a  onclick="location.reload();" class="btn btn-primary form-control  ">
                                <i class="fa fa-refresh" ></i>&ensp; Refresh
                            </a>
                        </div>
                         <div class="col-xs-2">
<!-- ousta -->
                @if($canEdit ||$canShow || $canDestroy)
                            <a     onclick="window.open('/admin/exportcarunt?exportcarunt=1','Print','width=1024,height=1024,toolbar=0,menubar=0,location=0').print()"class="btn btn-primary form-control  ">
                               <i class="fa fa-print" aria-hidden="true"></i> Print current orders
                            </a>

                           

                @endif

  <!-- outsa -->
                        </div>




                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                    {!! th_sort(trans('order.id'), 'id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.users'), 'users_id', $oResults) !!}
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.restaurant'), 'restaurant_id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                    {!! th_sort(trans('general.area'), 'area_id', $oResults) !!}
                                </th>




                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                    {{--{!! th_sort(trans('order.deliver_date'), 'deliver_date', $oResults) !!}--}}
                                    Order Date
                                </th>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                    {!! th_sort(trans('order.total'), 'total', $oResults) !!}
                                </th>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                    Payment Type
                                </th>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                    {!! th_sort(trans('order.status'), 'status', $oResults) !!}
                                </th>



                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                    {!! th_sort(trans('order.notification'), 'notification', $oResults) !!}
                                </th>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                    <a href="#"> Mobile</a>
                                </th>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                    <a href="#">  Email</a>
                                </th>



                                @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>

                                        <a href="?exportExcel=1&{{http_build_query($request->all())}}">
                                            <i class="fa fa-file-excel-o "></i>
                                        </a>


                                        <a href="?exportExcel=pdf&{{ http_build_query($request->all()) }}">
                                            <i class="fa fa-file-pdf-o "></i>
                                        </a>


                                        <a  onclick="window.open('/excel/exports/OrderPayment.html','Print','').print()"> <i class="fa fa-print" aria-hidden="true"></i>
                                        </a>


                                    </th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($oResults))
                                {{-- */$i=0;/* --}}
                                {{-- */$class='';/* --}}
                                @foreach($oResults as $oResult)
                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                    <tr class='{{ $class }}'>

                                        <td>#{{ $oResult->success_order_id }}</td>

                                        <td>

                                            <a href=" @if(   $oResult->address_id> 0)/admin/address/{{$oResult->address_id}} @else # @endif">

                                                {{ isset($oResult->users()->first()->first_name)? $oResult->users()->first()->first_name:'#' }}
                                            </a>
                                        </td>
                                        <td>{{ isset($oResult->restaurant()->first()->name_en)? $oResult->restaurant()->first()->name_en:'' }}</td>

                                        <td>

                                            {{ (isset($oResult->area->name_en))?$oResult->area->name_en:'' }}</td>



                                        <td>{{ $oResult->deliver_date  }} - {{$oResult->deliver_time}}</td>




                                        <td>{{ $oResult->total }}</td>
                                        <td>{{
                                        isset($oResult->payment->first()->type)?
                                        (array_key_exists( $oResult->payment->first()->type,config('array.payment_type')) ? config('array.payment_type')[$oResult->payment->first()->type]:'')
                                        :''
                                        }}</td>

                                        <td>
                                            <span class="label label-success font-weight-100" style="background-color:{{config('array.order_status_color')[$oResult->status]}} !important;">
                                            {{ (array_key_exists($oResult->status,config('array.order_status')))?config('array.order_status')[$oResult->status]:''  }}
                                        </span>
                                        </td>


                                        <td>{{ (array_key_exists($oResult->notification,config('array.order_notification')))?config('array.order_notification')[$oResult->notification]:'' }}</td>

                                        <td>

                                            {{ isset($oResult->users()->first()->first_name)? $oResult->users()->first()->mobile:'' }}

                                        </td>
                                        <td style="overflow: hidden;">

                                            {{ isset($oResult->users()->first()->first_name)?
                                            ((config('array.users_type_registered_index')==$oResult->users()->first()->type )? $oResult->users()->first()->email:$oResult->users()->first()->guest_email):'' }}

                                        </td>


                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                        'url' => ['/admin/order',$oResult->id]]) !!}
                                                        <button type="submit" name="Delete" class="deleteRow" >
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                        {!! Form::close() !!}
                                                    @endif
                                                    @if($canEdit )
                                                        <a href="/admin/order/{{ $oResult->id }}/edit"
                                                           class="fa fa-edit"></a>
                                                    @endif
                                                    @if($canShow)
                                                        <a href="/admin/order/{{ $oResult->id }}"
                                                           class="fa fa-file-text"></a>
                                                    @endif
                                                    <a href="{{ route('admin.order.map') }}?order_id={{ $oResult->id }}"
                                                       class="fa fa-map"></a>
                                                    <a href="/invoice/{{ $oResult->id }}" class="fa fa-book"></a>

                                                   @if($canShow)
                                                  <a    onclick="window.open('/admin/invoice/{{ $oResult->id }}','Print','width=1024,height=1024,toolbar=0,menubar=0,location=0').print()"> <i class="fa fa-print" aria-hidden="true"></i> </a>
                                                  @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('order.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                </div>


                                <div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($request->all())->render()) !!}
                                    {!! Form::open( array('url' => Request::fullUrl(), 'method' => 'get')) !!}
                                 {!! Form::text('page', $request->page, 
                                    array('required', 
                                    'class'=>'form-control', 
                                    'placeholder'=>'Page Number')) !!}
                                    {!! Form::hidden('id', $request->id) !!}
                                    {!! Form::hidden('order', $request->order) !!}
                                    {!! Form::hidden('sort', $request->sort) !!}
                                    {!! Form::hidden('search', 'Search') !!}
                                    {!! Form::hidden('period_type', $request->period_type) !!}
                                    {!! Form::hidden('to_date', $request->to_date) !!}
                                    {!! Form::hidden('from_date', $request->from_date) !!}
                                    {!! Form::hidden('payment_type', $request->payment_type) !!}
                                    {!! Form::hidden('status', (is_array($request->status)? json_encode($request->status):$request->status)) !!}
                                    {!! Form::hidden('rate', $request->rate) !!}
                                    {!! Form::hidden('coffee_id', $request->coffee_id) !!}
                                    {!! Form::hidden('area_id', $request->area_id) !!}
                                    {!! Form::hidden('users_type', $request->users_type) !!}
                                    {!! Form::hidden('mobile', $request->mobile) !!}
                                    {!! Form::hidden('users_name', $request->users_name) !!}
                                    {!! Form::hidden('menu_section_id', $request->menu_section_id) !!}
                                    {!! Form::hidden('restaurant_id', $request->restaurant_id) !!}
                                    {!! Form::hidden('deliver_date', $request->deliver_date) !!}
                                    
                                   
                                 {!! Form::close() !!}
                                </div>
                            </div>
                        @else
                            <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                        @endif
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> {!!trans('general.CopyRights')!!} </footer>
        </div>
        <!-- /#page-wrapper -->
        <!-- .right panel -->
        <div class="right-side-panel">
            <div class="scrollable-right container">
                <!-- .Theme settings -->
                <h3 class="title-heading">{{ trans('general.search') }}</h3>

                {!! Form::model($request,['method'=>'get','id'=>'searchForm', 'class'=>'form-horizontal']) !!}






                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('id', null, ['placeholder'=>trans('order.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>





                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('deliver_date', null, ['placeholder'=>trans('order.deliver_date'),'class'=>'form-control input-sm mydatepicker']) !!}

                    </div>
                </div>





                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('restaurant_id',[''=>'Select Restaurant']+$restaurantList, null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('menu_section_id',[''=>'Select Category']+$menuSectionList, null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('users_name', null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('mobile', null, ['placeholder'=>'Mobile','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('users_type',[''=>'Select Users Type']+config('array.users_type'), null, ['placeholder'=>'Users Type','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('area_id',[''=>'Select Area',false=>'All']+$areaList, null, ['placeholder'=>'Area','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('coffee_id',[''=>'Select Dish']+$dishList, null, ['placeholder'=>'Coffee','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('rate',[''=>'Rate']+config('array.rate'), null, ['placeholder'=>trans('order.rate'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>






                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('status',[''=>'Order Status']+config('array.order_status'), null, ['placeholder'=>trans('order.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>




                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('payment_type',[''=>'Select Payment Type']+config('array.payment_type'), null, ['placeholder'=>trans('payment.type'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('archive',[0=>trans('order.notArchive'),1=>trans('order.archive')], null, ['placeholder'=>trans('order.archive'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('from_date', null, ['placeholder'=>'From Date','class'=>'form-control input-sm mydatepicker']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('to_date', null, ['placeholder'=>'To date','class'=>'form-control input-sm mydatepicker']) !!}

                    </div>
                </div>




                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('period_type',[''=>'Select Time Period']+[
                '' => '',
                'daily' => 'daily',
                'monthly' => 'monthly',
                'yearly' =>  'yearly'
                ], null, ['placeholder'=>'Time Period','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>







                <div class="form-group">
                    <label class="col-md-12"></label>
                    <div class="col-md-12">
                        {!! Form::submit(trans('general.search'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}
                    </div>
                </div>

                {!! Form::hidden('sort', null) !!}
                {!! Form::hidden('order', null) !!}
                {!! Form::close()!!}
            </div>
        </div>

@stop
