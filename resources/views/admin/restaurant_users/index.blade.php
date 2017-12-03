@extends('common.layouts.main')
@section('title', trans('general.restaurant_users'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.restaurant_users.show');
    $canEdit=canAccess('admin.restaurant_users.edit');
    $canDestroy=canAccess('admin.restaurant_users.destroy');
    $canCreate=canAccess('admin.restaurant_users.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.restaurant_users') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.restaurant_users') }}</a></li>
                        <li class="active">{{ trans('general.restaurant_users') }}</li>
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
                            <h3 class="box-title m-b-0">{{ trans('restaurant_users.restaurant_usersTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('restaurant_users.restaurant_usersTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('admin.restaurant_users.create')}}"class="btn btn-primary form-control">
                                + {{trans('restaurant_users.restaurant_usersCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('restaurant_users.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('restaurant_users.users_id'), 'users_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        {!! th_sort(trans('restaurant_users.restaurant_id'), 'restaurant_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('restaurant_users.status'), 'status', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                        {!! th_sort(trans('restaurant_users.type'), 'type', $oResults) !!}
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

                                        <td>{{(isset( $oResult->users->first_name ))? $oResult->users->first_name :''}}</td>

                                        <td>{{ isset($oResult->restaurant->name_en)?$oResult->restaurant->name_en:'' }}</td>

                                        <td>{{ config('array.restaurant_users_status')[$oResult->status] }}</td>

                                        <td>{{ config('array.restaurant_users_type')[$oResult->type] }}</td>



                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/restaurant_users',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/restaurant_users/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
                                                    <a href="/admin/restaurant_users/{{ $oResult->id }}"
                                                       class="fa fa-file-text"></a>
@endif
                                                    @if(config('array.restaurant_users_type_driver_index') == $oResult->type)
                                                    <a href="{{ route('admin.driver.map') }}?driver_id={{ $oResult->users_id }}"
                                                       class="fa fa-map"></a>
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
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('restaurant_users.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('restaurant_users.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                         {!! Form::select('users_id', [''=>'username']+$usersList,null, ['placeholder'=>trans('restaurant_rate.users_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                





    <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('mobile', null, ['placeholder'=>trans('restaurant_users.mobile'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                









                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('restaurant_id',[''=>'Select Restaurant']+$restaurantList, null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                      {!! Form::select("status",config('array.restaurant_users_status'), null, ["class" => "form-control input-sm","placeholder"=> trans("restaurant_users.status")]) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select("type",config('array.restaurant_users_type'), null, ["class" => "form-control input-sm","placeholder"=> trans("restaurant_users.type")]) !!}

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
