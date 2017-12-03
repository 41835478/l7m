@extends('common.layouts.main')
@section('title', trans('general.restaurant_rate'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.restaurant_rate.show');
    $canEdit=canAccess('admin.restaurant_rate.edit');
    $canDestroy=canAccess('admin.restaurant_rate.destroy');
    $canCreate=canAccess('admin.restaurant_rate.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.restaurant_rate') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.restaurant_rate') }}</a></li>
                        <li class="active">{{ trans('general.restaurant_rate') }}</li>
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

                        <div class=" col-xs-6">
                            <h3 class="box-title m-b-0">{{ trans('restaurant_rate.restaurant_rateTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('restaurant_rate.restaurant_rateTableDescription') }}</p>



                        </div>
                        @if($canCreate)

                            <div class="col-xs-3">
                                <a  href="{{route('admin.edit_rate_config.index')}}"class="btn btn-primary form-control">
                                   {{ (config('module.restaurant_rate') ==config('module.restaurant_rate_active_index'))? 'Disable Rating':'Enable Rating' }}
                                </a>
                            </div>
                        <div class="col-xs-3">
                            <a  href="{{route('admin.restaurant_rate.create')}}"class="btn btn-primary form-control">
                                + {{trans('restaurant_rate.restaurant_rateCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('restaurant_rate.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('restaurant_rate.users_id'), 'users_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        {!! th_sort(trans('restaurant_rate.restaurant_id'), 'restaurant_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('restaurant_rate.rate'), 'rate', $oResults) !!}
                                    </th>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                        {!! th_sort(trans('restaurant_rate.status'), 'status', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                        {!! th_sort(trans('restaurant_rate.notification'), 'notification', $oResults) !!}
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

                                        <td>{{ $oResult->users->first_name }}</td>

                                        <td>{{ $oResult->restaurant->name_en }}</td>

                                                                                <td>{{ $oResult->rate }}</td>


                                        <td>{{ config('array.restaurant_rate_status')[ $oResult->status] }}</td>

                                        <td>{{ config('array.restaurant_rate_notification')[ $oResult->notification] }}</td>


                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/restaurant_rate',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/restaurant_rate/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
                                                    <a href="/admin/restaurant_rate/{{ $oResult->id }}"
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
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('restaurant_rate.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('restaurant_rate.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

             <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('users_id', [''=>'username']+$usersList,null, ['placeholder'=>trans('restaurant_rate.users_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

             <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('restaurant_id', [''=>'Resturant']+$restaurantList,null, ['placeholder'=>trans('restaurant_rate.restaurant_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

              <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('rate',[''=>'Rate']+config('array.rate'), null, ['placeholder'=>trans('restaurant_rate.rate'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                
 <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('description', null, ['placeholder'=>trans('restaurant_rate.description'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                
  <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('status', [''=>'status']+config('array.restaurant_rate_status') , null, ['placeholder'=>trans('restaurant_rate.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

               <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('notification', [''=>'notification']+config('array.restaurant_rate_notification'),null, ['placeholder'=>trans('restaurant_rate.notification'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                    <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('created_at', null, ['placeholder'=>trans('restaurant_rate.created_at'),'class'=>'form-control input-sm mydatepicker ']) !!}

                    </div>
                </div>


                
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('updated_at', null, ['placeholder'=>trans('restaurant_rate.updated_at'),'class'=>'form-control input-sm mydatepicker ']) !!}

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
