@extends('common.layouts.main')
@section('title', trans('general.cuisine'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.cuisine.show');
    $canEdit=canAccess('admin.cuisine.edit');
    $canDestroy=canAccess('admin.cuisine.destroy');
    $canCreate=canAccess('admin.cuisine.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.cuisine') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.cuisine') }}</a></li>
                        <li class="active">{{ trans('general.cuisine') }}</li>
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
                            <h3 class="box-title m-b-0">{{ trans('cuisine.cuisineTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('cuisine.cuisineTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('admin.cuisine.create')}}"class="btn btn-primary form-control">
                                + {{trans('cuisine.cuisineCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('cuisine.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('cuisine.name_en'), 'name_en', $oResults) !!}
                                    </th>

                                @if(isset($request->bestCuisine))
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {{trans('general.orderNumbers')}}
                                    </th>

                                @endif



                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('cuisine.status'), 'status', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                        {!! th_sort(trans('cuisine.created_at'), 'created_at', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                        {!! th_sort(trans('cuisine.updated_at'), 'updated_at', $oResults) !!}
                                    </th>

                                
                                    @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i> 


                                                @if($request->bestCuisine)
                         <a href="?exportExcel=1&{{http_build_query($request->all())}}">
                                            <i class="fa fa-file-excel-o "></i>
                                        </a>


                                         <a href="?exportExcel=pdf&{{ http_build_query($request->all()) }}">
                                            <i class="fa fa-file-pdf-o "></i>
                                        </a>
                                           

                              @endif

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

                                                                                <td>{{ $oResult->name_en }}</td>


                                        @if(isset($request->bestCuisine))
                                            <td>{{ $oResult->order_number }}</td>


                                        @endif

                                                                                <td class="status_td cuisine">{{ (array_key_exists($oResult->status ,config('array.cuisine_status')))? config('array.cuisine_status')[$oResult->status]:'' }}</td>


                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                <td>{{ $oResult->updated_at }}</td>

                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/cuisine',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/cuisine/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
                                                    <a href="/admin/cuisine/{{ $oResult->id }}"
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
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('cuisine.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('cuisine.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name_en', null, ['placeholder'=>trans('cuisine.name_en'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name_ar', null, ['placeholder'=>trans('cuisine.name_ar'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select("status",config('array.cuisine_status'), null, ["class" => "form-control input-sm","placeholder"=> trans("cuisine.status")]) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('description_en', null, ['placeholder'=>trans('cuisine.description_en'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('description_ar', null, ['placeholder'=>trans('cuisine.description_ar'),'class'=>'form-control input-sm ']) !!}

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

                        <div class="col-xs-3">
                            {!! Form::checkbox('bestCuisine',1, null, ['id'=>'bestCuisineCheckbox','class'=>'form-control input-sm col-xs-3 ','style'=>'float:left']) !!}
                        </div>
                        <label class="col-xs-9" style="padding-top:10px;" for="bestCuisineCheckbox">  Best Cuisine
                        </label>
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
