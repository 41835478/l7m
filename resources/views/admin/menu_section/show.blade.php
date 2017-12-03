@extends('common.layouts.main')
@section('title', trans('menu_section.menu_section'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.menu_section.edit');
    $canDestroy=canAccess('admin.menu_section.destroy');

    $canDishRelation=canAccess('admin.dish.relation');
    $canDishEdit=canAccess('admin.dish.edit');
    $canDishDestroy=canAccess('admin.dish.destroy');
    $canDishCreate=canAccess('admin.dish.create');
    $canDishShow=canAccess('admin.dish.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.menu_section') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.menu_section') }}</a></li>
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
                            <h3 class="box-title m-b-0">{{ trans('general.menu_section') }}</h3>
                            <p class="text-muted m-b-40">{{ trans('general.details') }}</p>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active">
                                    <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.detail')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#dish" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.dish')}}</span></a>
                                </li>

                                

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane active" id="idetail">


                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">{{ trans('menu_section.menu_sectionInfo') }}</span>
                                        </div>

                                        <div class="panel-body">


                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('menu_section.name_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$menu_section['name_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('menu_section.name_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$menu_section['name_ar'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('menu_section.restaurant_id') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$menu_section['restaurant_id'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('menu_section.status') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$menu_section['status'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('menu_section.description_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$menu_section['description_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('menu_section.description_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$menu_section['description_ar'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('menu_section.created_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$menu_section['created_at'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('menu_section.updated_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$menu_section['updated_at'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                            



                                            <div class="row">

                                                <div class="col-xs-offset-6 col-xs-3">

                                                    @if($canEdit)
                                                        <a href="/admin/menu_section/{{ $menu_section['id'] }}/edit"
                                                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                                                    @endif
                                                </div>
                                                <div class=" col-xs-3">
                                                    @if($canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                'url' => ['/admin/menu_section',$menu_section['id']]]) !!}
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




                                                                @if( $canDishRelation)
                                <div role="tabpanel" class="tab-pane active" id="dish">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('dish.dishTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('dish.dishTableDescription') }}</p>



                                                    </div>

                                                    @if( $canDishCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.dish.create')}}?menu_section_id={{$menu_section['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('dish.dishCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('dish.id'), 'id', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('dish.name_en'), 'name_en', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('dish.name_ar'), 'name_ar', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('dish.restaurant_id'), 'restaurant_id', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('dish.cuisine_id'), 'cuisine_id', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('dish.menu_section_id'), 'menu_section_id', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('dish.category_id'), 'category_id', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('dish.delivery_menu_id'), 'delivery_menu_id', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('dish.parent_id'), 'parent_id', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('dish.price'), 'price', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('dish.quantity'), 'quantity', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                                {!! th_sort(trans('dish.img'), 'img', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                                                {!! th_sort(trans('dish.discount'), 'discount', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                                                {!! th_sort(trans('dish.available_from'), 'available_from', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                                                {!! th_sort(trans('dish.available_to'), 'available_to', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                                                {!! th_sort(trans('dish.description_en'), 'description_en', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="17">
                                                                {!! th_sort(trans('dish.description_ar'), 'description_ar', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                                                {!! th_sort(trans('dish.status'), 'status', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="19">
                                                                {!! th_sort(trans('dish.created_at'), 'created_at', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="20">
                                                                {!! th_sort(trans('dish.updated_at'), 'updated_at', $oDishResults) !!}
                                                            </th>

                                                                                                                        @if($canDishShow
                                                            || $canDishEdit
                                                            || $canDishDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oDishResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oDishResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->name_ar }}</td>

                                                                                                                                        <td>{{ $oResult->restaurant_id }}</td>

                                                                                                                                        <td>{{ $oResult->cuisine_id }}</td>

                                                                                                                                        <td>{{ $oResult->menu_section_id }}</td>

                                                                                                                                        <td>{{ $oResult->category_id }}</td>

                                                                                                                                        <td>{{ $oResult->delivery_menu_id }}</td>

                                                                                                                                        <td>{{ $oResult->parent_id }}</td>

                                                                                                                                        <td>{{ $oResult->price }}</td>

                                                                                                                                        <td>{{ $oResult->quantity }}</td>

                                                                                                                                        <td>{{ $oResult->img }}</td>

                                                                                                                                        <td>{{ $oResult->discount }}</td>

                                                                                                                                        <td>{{ $oResult->available_from }}</td>

                                                                                                                                        <td>{{ $oResult->available_to }}</td>

                                                                                                                                        <td>{{ $oResult->description_en }}</td>

                                                                                                                                        <td>{{ $oResult->description_ar }}</td>

                                                                                                                                        <td>{{ $oResult->status }}</td>

                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canDishDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/dish',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canDishEdit)
                                                                                    <a href="/admin/dish/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canDishShow )
                                                                                    <a href="/admin/dish/{{ $oResult->id }}"
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
                                                    @if (count($oDishResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oDishResults->firstItem() }} {{trans('general.to')}} {{ $oDishResults->lastItem() }} {{trans('general.of')}} {{ $oDishResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oDishResults->appends(Input::except('page_dish'))->appends($request->all())->render()) !!}
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