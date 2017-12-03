@extends('common.layouts.main')
@section('title', trans('area.area'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.area.edit');
    $canDestroy=canAccess('admin.area.destroy');

    $canRestaurantRelation=canAccess('admin.restaurant.relation');
    $canRestaurantEdit=canAccess('admin.restaurant.edit');
    $canRestaurantDestroy=canAccess('admin.restaurant.destroy');
    $canRestaurantCreate=canAccess('admin.restaurant.create');
    $canRestaurantShow=canAccess('admin.restaurant.show');

    $canRestaurantAreaRelation=canAccess('admin.restaurant_area.relation');
    $canRestaurantAreaEdit=canAccess('admin.restaurant_area.edit');
    $canRestaurantAreaDestroy=canAccess('admin.restaurant_area.destroy');
    $canRestaurantAreaCreate=canAccess('admin.restaurant_area.create');
    $canRestaurantAreaShow=canAccess('admin.restaurant_area.show');

    $canAddressRelation=canAccess('admin.address.relation');
    $canAddressEdit=canAccess('admin.address.edit');
    $canAddressDestroy=canAccess('admin.address.destroy');
    $canAddressCreate=canAccess('admin.address.create');
    $canAddressShow=canAccess('admin.address.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.area') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.area') }}</a></li>
                            <li class="active">{{ trans('general.details') }}</li>
                        </ol>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <form role="search" class="app-search hidden-xs pull-right">
                            <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>







                <div class="row">


                    <div class="col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">{{ trans('general.area') }}</h3>
                            <p class="text-muted m-b-40">{{ trans('general.details') }}</p>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active">
                                    <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.detail')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#restaurant" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.restaurant')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#restaurantArea" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.restaurant_area')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#address" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.address')}}</span></a>
                                </li>

                                

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane active" id="idetail">


                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">{{ trans('area.areaInfo') }}</span>
                                        </div>

                                        <div class="panel-body">


                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.name_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['name_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.name_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['name_ar'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.governorate_id') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['governorate_id'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.description_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['description_en'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.description_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['description_ar'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.created_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['created_at'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('area.updated_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$area['updated_at'] }}</label>
                                                </div>
                                            </div>

                                            
                                            



                                            <div class="row">

                                                <div class="col-xs-offset-6 col-xs-3">

                                                    @if($canEdit)
                                                        <a href="/admin/area/{{ $area['id'] }}/edit"
                                                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                                                    @endif
                                                </div>
                                                <div class=" col-xs-3">
                                                    @if($canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                'url' => ['/admin/area',$area['id']]]) !!}
                                                        <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                                            <i class="fa fa-trash"></i>
                                                            {{trans('general.delete')}}
                                                        </button>
                                                        {!! Form::close() !!}
                                                    @endif
                                                </div>

                                            </div>


                                        </div>
                                        <!-- row -->
                                    </div>


                                </div>




                                                                @if( $canRestaurantRelation)
                                <div role="tabpanel" class="tab-pane active" id="restaurant">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('restaurant.restaurantTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('restaurant.restaurantTableDescription') }}</p>



                                                    </div>

                                                    @if( $canRestaurantCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.restaurant.create')}}?area_id={{$area['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('restaurant.restaurantCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('restaurant.id'), 'id', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('restaurant.name_en'), 'name_en', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('restaurant.name_ar'), 'name_ar', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('restaurant.Owner_first_name'), 'Owner_first_name', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('restaurant.Owner_last_name'), 'Owner_last_name', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('restaurant.email'), 'email', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('restaurant.available_payment'), 'available_payment', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('restaurant.telephone'), 'telephone', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('restaurant.status'), 'status', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('restaurant.min_amount'), 'min_amount', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('restaurant.working_hour_from'), 'working_hour_from', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                                {!! th_sort(trans('restaurant.working_hour_to'), 'working_hour_to', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                                                {!! th_sort(trans('restaurant.deliver_time_from'), 'deliver_time_from', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                                                {!! th_sort(trans('restaurant.deliver_time_to'), 'deliver_time_to', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                                                {!! th_sort(trans('restaurant.deliver_charge'), 'deliver_charge', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                                                {!! th_sort(trans('restaurant.rating'), 'rating', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="17">
                                                                {!! th_sort(trans('restaurant.show_menu'), 'show_menu', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                                                {!! th_sort(trans('restaurant.order_accept_days'), 'order_accept_days', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="19">
                                                                {!! th_sort(trans('restaurant.offline_order'), 'offline_order', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="20">
                                                                {!! th_sort(trans('restaurant.url'), 'url', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="21">
                                                                {!! th_sort(trans('restaurant.img'), 'img', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="22">
                                                                {!! th_sort(trans('restaurant.commission_type'), 'commission_type', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="23">
                                                                {!! th_sort(trans('restaurant.discount_type'), 'discount_type', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="24">
                                                                {!! th_sort(trans('restaurant.discount'), 'discount', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="25">
                                                                {!! th_sort(trans('restaurant.area_id'), 'area_id', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="26">
                                                                {!! th_sort(trans('restaurant.follow_us'), 'follow_us', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="27">
                                                                {!! th_sort(trans('restaurant.notification'), 'notification', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="28">
                                                                {!! th_sort(trans('restaurant.address_en'), 'address_en', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="29">
                                                                {!! th_sort(trans('restaurant.address_ar'), 'address_ar', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="30">
                                                                {!! th_sort(trans('restaurant.description_en'), 'description_en', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="31">
                                                                {!! th_sort(trans('restaurant.description_ar'), 'description_ar', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="32">
                                                                {!! th_sort(trans('restaurant.summary_en'), 'summary_en', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="33">
                                                                {!! th_sort(trans('restaurant.summary_ar'), 'summary_ar', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="34">
                                                                {!! th_sort(trans('restaurant.created_at'), 'created_at', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="35">
                                                                {!! th_sort(trans('restaurant.updated_at'), 'updated_at', $oRestaurantResults) !!}
                                                            </th>

                                                                                                                        @if($canRestaurantShow
                                                            || $canRestaurantEdit
                                                            || $canRestaurantDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oRestaurantResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oRestaurantResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->name_ar }}</td>

                                                                                                                                        <td>{{ $oResult->Owner_first_name }}</td>

                                                                                                                                        <td>{{ $oResult->Owner_last_name }}</td>

                                                                                                                                        <td>{{ $oResult->email }}</td>

                                                                                                                                        <td>{{ $oResult->available_payment }}</td>

                                                                                                                                        <td>{{ $oResult->telephone }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->min_amount }}</td>

                                                                                                                                        <td>{{ $oResult->working_hour_from }}</td>

                                                                                                                                        <td>{{ $oResult->working_hour_to }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_time_from }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_time_to }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_charge }}</td>

                                                                                                                                        <td>{{ $oResult->rating }}</td>

                                                                                                                                        <td>{{ $oResult->show_menu }}</td>

                                                                                                                                        <td>{{ $oResult->order_accept_days }}</td>

                                                                                                                                        <td>{{ $oResult->offline_order }}</td>

                                                                                                                                        <td>{{ $oResult->url }}</td>

                                                                                                                                        <td>{{ $oResult->img }}</td>

                                                                                                                                        <td>{{ $oResult->commission_type }}</td>

                                                                                                                                        <td>{{ $oResult->discount_type }}</td>

                                                                                                                                        <td>{{ $oResult->discount }}</td>

                                                                                                                                        <td>{{ $oResult->area_id }}</td>

                                                                                                                                        <td>{{ $oResult->follow_us }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->address_en }}</td>

                                                                                                                                        <td>{{ $oResult->address_ar }}</td>

                                                                                                                                        <td>{{ $oResult->description_en }}</td>

                                                                                                                                        <td>{{ $oResult->description_ar }}</td>

                                                                                                                                        <td>{{ $oResult->summary_en }}</td>

                                                                                                                                        <td>{{ $oResult->summary_ar }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canRestaurantDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/restaurant',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canRestaurantEdit)
                                                                                    <a href="/admin/restaurant/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canRestaurantShow )
                                                                                    <a href="/admin/restaurant/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oRestaurantResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oRestaurantResults->firstItem() }} {{trans('general.to')}} {{ $oRestaurantResults->lastItem() }} {{trans('general.of')}} {{ $oRestaurantResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oRestaurantResults->appends(Input::except('page_restaurant'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canRestaurantAreaRelation)
                                <div role="tabpanel" class="tab-pane active" id="restaurantArea">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('restaurant_area.restaurant_areaTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('restaurant_area.restaurant_areaTableDescription') }}</p>



                                                    </div>

                                                    @if( $canRestaurantAreaCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.restaurant_area.create')}}?area_id={{$area['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('restaurant_area.restaurant_areaCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('restaurant_area.id'), 'id', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('restaurant_area.area_id'), 'area_id', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('restaurant_area.restaurant_id'), 'restaurant_id', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('restaurant_area.delivery_charges'), 'delivery_charges', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('restaurant_area.sahalat_charge'), 'sahalat_charge', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('restaurant_area.min_amount'), 'min_amount', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('restaurant_area.deliver_time_from'), 'deliver_time_from', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('restaurant_area.deliver_time_to'), 'deliver_time_to', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('restaurant_area.status'), 'status', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('restaurant_area.governorate_id'), 'governorate_id', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('restaurant_area.created_at'), 'created_at', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                                {!! th_sort(trans('restaurant_area.updated_at'), 'updated_at', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        @if($canRestaurantAreaShow
                                                            || $canRestaurantAreaEdit
                                                            || $canRestaurantAreaDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oRestaurantAreaResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oRestaurantAreaResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->area_id }}</td>

                                                                                                                                        <td>{{ $oResult->restaurant_id }}</td>

                                                                                                                                        <td>{{ $oResult->delivery_charges }}</td>

                                                                                                                                        <td>{{ $oResult->sahalat_charge }}</td>

                                                                                                                                        <td>{{ $oResult->min_amount }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_time_from }}</td>

                                                                                                                                        <td>{{ $oResult->deliver_time_to }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->governorate_id }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canRestaurantAreaDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/restaurant_area',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canRestaurantAreaEdit)
                                                                                    <a href="/admin/restaurant_area/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canRestaurantAreaShow )
                                                                                    <a href="/admin/restaurant_area/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oRestaurantAreaResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oRestaurantAreaResults->firstItem() }} {{trans('general.to')}} {{ $oRestaurantAreaResults->lastItem() }} {{trans('general.of')}} {{ $oRestaurantAreaResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oRestaurantAreaResults->appends(Input::except('page_restaurant_area'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                                                @if( $canAddressRelation)
                                <div role="tabpanel" class="tab-pane active" id="address">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('address.addressTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('address.addressTableDescription') }}</p>



                                                    </div>

                                                    @if( $canAddressCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.address.create')}}?area_id={{$area['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('address.addressCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('address.id'), 'id', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('address.users_id'), 'users_id', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('address.area_id'), 'area_id', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('address.name'), 'name', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('address.type'), 'type', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('address.first_name'), 'first_name', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('address.last_name'), 'last_name', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('address.pacl_number'), 'pacl_number', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('address.block'), 'block', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('address.street'), 'street', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('address.judda'), 'judda', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                                {!! th_sort(trans('address.avenue'), 'avenue', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                                                {!! th_sort(trans('address.building'), 'building', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                                                {!! th_sort(trans('address.floor'), 'floor', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                                                {!! th_sort(trans('address.apartment_number'), 'apartment_number', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                                                {!! th_sort(trans('address.mobile'), 'mobile', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="17">
                                                                {!! th_sort(trans('address.phone'), 'phone', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                                                {!! th_sort(trans('address.long'), 'long', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="19">
                                                                {!! th_sort(trans('address.lat'), 'lat', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="20">
                                                                {!! th_sort(trans('address.directions'), 'directions', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="21">
                                                                {!! th_sort(trans('address.default'), 'default', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="22">
                                                                {!! th_sort(trans('address.notification'), 'notification', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="23">
                                                                {!! th_sort(trans('address.created_at'), 'created_at', $oAddressResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="24">
                                                                {!! th_sort(trans('address.updated_at'), 'updated_at', $oAddressResults) !!}
                                                            </th>

                                                                                                                        @if($canAddressShow
                                                            || $canAddressEdit
                                                            || $canAddressDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oAddressResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oAddressResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users_id }}</td>

                                                                                                                                        <td>{{ $oResult->area_id }}</td>

                                                                                                                                        <td>{{ $oResult->name }}</td>

                                                                                                                                        <td>{{ $oResult->type }}</td>

                                                                                                                                        <td>{{ $oResult->first_name }}</td>

                                                                                                                                        <td>{{ $oResult->last_name }}</td>

                                                                                                                                        <td>{{ $oResult->pacl_number }}</td>

                                                                                                                                        <td>{{ $oResult->block }}</td>

                                                                                                                                        <td>{{ $oResult->street }}</td>

                                                                                                                                        <td>{{ $oResult->judda }}</td>

                                                                                                                                        <td>{{ $oResult->avenue }}</td>

                                                                                                                                        <td>{{ $oResult->building }}</td>

                                                                                                                                        <td>{{ $oResult->floor }}</td>

                                                                                                                                        <td>{{ $oResult->apartment_number }}</td>

                                                                                                                                        <td>{{ $oResult->mobile }}</td>

                                                                                                                                        <td>{{ $oResult->phone }}</td>

                                                                                                                                        <td>{{ $oResult->long }}</td>

                                                                                                                                        <td>{{ $oResult->lat }}</td>

                                                                                                                                        <td>{{ $oResult->directions }}</td>

                                                                                                                                        <td>{{ $oResult->default }}</td>

                                                                                                                                        <td>{{ $oResult->notification }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canAddressDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/address',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canAddressEdit)
                                                                                    <a href="/admin/address/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canAddressShow )
                                                                                    <a href="/admin/address/{{ $oResult->id }}"
                                                                                       class="fa fa-file-text"></a>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    @if (count($oAddressResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oAddressResults->firstItem() }} {{trans('general.to')}} {{ $oAddressResults->lastItem() }} {{trans('general.of')}} {{ $oAddressResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oAddressResults->appends(Input::except('page_address'))->appends($request->all())->render()) !!}
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="noResultDiv" >{{trans('general.noResult')}}</div>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                               </div>
                                @endif
                                

                            </div>
                        </div>
                    </div>

                </div>







            </div>
        </div>



@stop