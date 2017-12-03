@extends('common.layouts.main')
@section('title', trans('general.dish'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.dish.show');
    $canEdit=canAccess('admin.dish.edit');
    $canDestroy=canAccess('admin.dish.destroy');
    $canCreate=canAccess('admin.dish.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.dish') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.dish') }}</a></li>
                        <li class="active">{{ trans('general.dish') }}</li>
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
                            <h3 class="box-title m-b-0">{{ trans('dish.dishTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('dish.dishTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('admin.dish.create')}}"class="btn btn-primary form-control">
                                + {{trans('dish.dishCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('dish.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('dish.name_en'), 'name_en', $oResults) !!}
                                    </th>


                                @if(isset($request->best))
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {{trans('general.orderNumbers')}}
                                    </th>

                                @endif
                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('general.restaurant'), 'restaurant_id', $oResults) !!}
                                    </th>






                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                        {!! th_sort(trans('dish.price'), 'price', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                        {!! th_sort(trans('dish.quantity'), 'quantity', $oResults) !!}
                                    </th>



                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                        {!! th_sort(trans('dish.status'), 'status', $oResults) !!}
                                    </th>

                                
                                    @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i>




                                                @if($request->best)
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

                                                                                <td><img style="width:40px;height:40px;" src="{{ $oResult->img }}">
                                                                                    {{ $oResult->name_en }}</td>

                                        @if(isset($request->best))
                                            <td>{{ $oResult->order_number }}</td>


                                        @endif
                                                                                <td>{{ isset($oResult->restaurant->name_en)? $oResult->restaurant->name_en:'' }}</td>


                                                                                <td>{{ $oResult->price }}</td>

                                                                                <td>{{ $oResult->quantity }}</td>

                                        <td>{{ array_key_exists($oResult->status,config('array.dish_status'))? config('array.dish_status')[$oResult->status]:'' }}</td>


                                        
                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/dish',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/dish/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
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
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('dish.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
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
                        {!! Form::text('id', null, ['placeholder'=>trans('dish.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name_en', null, ['placeholder'=>trans('dish.name_en'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name_ar', null, ['placeholder'=>trans('dish.name_ar'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

              <div class="form-group">
                    <div class="col-md-12">

                        {!! Form::select('restaurant_id',[''=>'Select Restaurant']+$restaurantList, null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('cuisine_id',[''=>'Select Cuisine']+$cuisineList, null, ['placeholder'=>'User Name','class'=>'form-control input-sm ']) !!}


                    </div>
                </div>

                
<!-- 
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select("menu_section_id",array_merge(['' => 'Menu section id'],$menuSectionList), null, ["class" => "form-control input-sm","placeholder"=> trans("dish.menu_section_id")]) !!}

                    </div>
                </div>
 -->
                

               <!--  <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select("category_id",array_merge(['' => 'Select Category'], $categoryList), null, ["class" => "form-control input-sm ","placeholder"=> trans("dish.category_id")]) !!}

                    </div>
                </div>
 -->
                
<!-- 
                <div class="form-group">
                    <div class="col-md-12">

                         {!! Form::select("delivery_menu_id",array_merge(['' => 'Delevery menu id'], $deliveryMenuList), null, ["class" => "form-control input-sm ","placeholder"=> trans("dish.delivery_menu_id")]) !!}

                    </div>
                </div>
 -->
                
<!-- 
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('parent_id', null, ['placeholder'=>trans('dish.parent_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                 -->

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('price', null, ['placeholder'=>trans('dish.price'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('quantity', null, ['placeholder'=>trans('dish.quantity'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                
<!-- 
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('img', null, ['placeholder'=>trans('dish.img'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div> -->

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('discount', null, ['placeholder'=>trans('dish.discount'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">

                        {!! Form::text('available_from', null, ['placeholder'=>trans('dish.available_from'),'class'=>'form-control input-sm  input-sm mydatepicker ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">

                        {!! Form::text('available_to', null, ['placeholder'=>trans('dish.available_to'),'class'=>'form-control input-sm  input-sm mydatepicker ']) !!}

                    </div>
                </div>

                

             <!--    <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('description_en', null, ['placeholder'=>trans('dish.description_en'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>
 -->
                
<!-- 
                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('description_ar', null, ['placeholder'=>trans('dish.description_ar'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>
 -->
                

                <div class="form-group">
                    <div class="col-md-12">

                       {!! Form::select('status',[''=>'dish Status']+config('array.dish_status'), null, ['placeholder'=>trans('order.status'),'class'=>'form-control input-sm  ']) !!}

                    </div>
                </div>

                

                   <div class="form-group">
                    <div class="col-md-12">

                        {!! Form::text('created_at', null, ['placeholder'=>trans('dish.created_at'),'class'=>'form-control input-sm input-sm mydatepicker ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">

                        {!! Form::text('updated_at', null, ['placeholder'=>trans('dish.updated_at'),'class'=>'form-control input-sm  input-sm mydatepicker']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">

                        <div class="col-xs-3">
                            {!! Form::checkbox('best',1, null, ['id'=>'bestCheckbox','class'=>'form-control input-sm col-xs-3 ','style'=>'float:left']) !!}
                        </div>
                        <label class="col-xs-9" style="padding-top:10px;" for="bestCheckbox">  Best Dishes
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
