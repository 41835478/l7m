@extends('common.layouts.main')
@section('title', trans('general.restaurant_area'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.restaurant_area.show');
    $canEdit=canAccess('admin.restaurant_area.edit');
    $canDestroy=canAccess('admin.restaurant_area.destroy');
    $canCreate=canAccess('admin.restaurant_area.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.restaurant_area') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.restaurant_area') }}</a></li>
                        <li class="active">{{ trans('general.restaurant_area') }}</li>
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
                <div class="col-lg-12">
                    <div class="white-box">



                        @include('common.partials.messages')

                        <div class=" col-xs-9">
                            <h3 class="box-title m-b-0">{{ trans('restaurant_area.restaurant_areaTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('restaurant_area.restaurant_areaTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('admin.restaurant_area.create')}}"class="btn btn-primary form-control">
                                + {{trans('restaurant_area.restaurant_areaCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('restaurant_area.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('general.area'), 'area_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        {!! th_sort(trans('restaurant_area.restaurant_id'), 'restaurant_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('restaurant_area.delivery_charges'), 'delivery_charges', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                        {!! th_sort(trans('restaurant_area.sahalat_charge'), 'sahalat_charge', $oResults) !!}
                                    </th>




                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                        {!! th_sort(trans('restaurant_area.status'), 'status', $oResults) !!}
                                    </th>



                                    @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>


                                     

                            <a href="?exportExcel=1&{{http_build_query($request->all())}}">
                                            <i class="fa fa-file-excel-o "></i>
                                        </a>

                                        <a href="?exportExcel=pdf&{{ http_build_query($request->all()) }}">
                                            <i class="fa fa-file-pdf-o "></i>
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

                                                                                <td>{{ $oResult->id }}</td>

                                                                                <td>{{ $oResult->area->name_en }}</td>

                                                                                <td>{{ $oResult->restaurant->name_en }}</td>

                                                                                <td>{{ $oResult->delivery_charges }}</td>

                                                                                <td>{{ $oResult->sahalat_charge }}</td>

                                        <td>{{ config('array.restaurant_area_status')[$oResult->status] }}</td>



                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/restaurant_area',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/restaurant_area/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
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
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('restaurant_area.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                </div>


                                <div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($request->all())->render()) !!}
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
                        {!! Form::text('id', null, ['placeholder'=>trans('restaurant_area.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">

                    {!! Form::select("area_id",[''=>'Serlect area']+$areaList, null, ["class" => "form-control input-sm","placeholder"=> trans("restaurant.area_id")]) !!}


                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                               {!! Form::select('restaurant_id',[''=>'Select Restaurant']+$restaurantList, null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('delivery_charges', null, ['placeholder'=>trans('restaurant_area.delivery_charges'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div> 

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('sahalat_charge', null, ['placeholder'=>trans('restaurant_area.sahalat_charge'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                         {!! Form::select("status",array_merge(['' => 'Status'],config('array.restaurant_area_status')), null, ["class" => "form-control input-sm","placeholder"=> trans("restaurant_area.status")]) !!}

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
