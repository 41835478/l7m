@extends('common.layouts.main')
@section('title', trans('restaurant.restaurant'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.restaurant.edit');
    $canDestroy=canAccess('admin.restaurant.destroy');

    $canCategoryRelation=canAccess('admin.category.relation');
    $canCategoryEdit=canAccess('admin.category.edit');
    $canCategoryDestroy=canAccess('admin.category.destroy');
    $canCategoryCreate=canAccess('admin.category.create');
    $canCategoryShow=canAccess('admin.category.show');

    $canDeliveryMenuRelation=canAccess('admin.delivery_menu.relation');
    $canDeliveryMenuEdit=canAccess('admin.delivery_menu.edit');
    $canDeliveryMenuDestroy=canAccess('admin.delivery_menu.destroy');
    $canDeliveryMenuCreate=canAccess('admin.delivery_menu.create');
    $canDeliveryMenuShow=canAccess('admin.delivery_menu.show');

    $canRestaurantRateRelation=canAccess('admin.restaurant_rate.relation');
    $canRestaurantRateEdit=canAccess('admin.restaurant_rate.edit');
    $canRestaurantRateDestroy=canAccess('admin.restaurant_rate.destroy');
    $canRestaurantRateCreate=canAccess('admin.restaurant_rate.create');
    $canRestaurantRateShow=canAccess('admin.restaurant_rate.show');

    $canRestaurantCuisineRelation=canAccess('admin.restaurant_cuisine.relation');
    $canRestaurantCuisineEdit=canAccess('admin.restaurant_cuisine.edit');
    $canRestaurantCuisineDestroy=canAccess('admin.restaurant_cuisine.destroy');
    $canRestaurantCuisineCreate=canAccess('admin.restaurant_cuisine.create');
    $canRestaurantCuisineShow=canAccess('admin.restaurant_cuisine.show');

    $canMenuSectionRelation=canAccess('admin.menu_section.relation');
    $canMenuSectionEdit=canAccess('admin.menu_section.edit');
    $canMenuSectionDestroy=canAccess('admin.menu_section.destroy');
    $canMenuSectionCreate=canAccess('admin.menu_section.create');
    $canMenuSectionShow=canAccess('admin.menu_section.show');

    $canDishRelation=canAccess('admin.dish.relation');
    $canDishEdit=canAccess('admin.dish.edit');
    $canDishDestroy=canAccess('admin.dish.destroy');
    $canDishCreate=canAccess('admin.dish.create');
    $canDishShow=canAccess('admin.dish.show');

    $canDishRateRelation=canAccess('admin.dish_rate.relation');
    $canDishRateEdit=canAccess('admin.dish_rate.edit');
    $canDishRateDestroy=canAccess('admin.dish_rate.destroy');
    $canDishRateCreate=canAccess('admin.dish_rate.create');
    $canDishRateShow=canAccess('admin.dish_rate.show');

    $canRestaurantAreaRelation=canAccess('admin.restaurant_area.relation');
    $canRestaurantAreaEdit=canAccess('admin.restaurant_area.edit');
    $canRestaurantAreaDestroy=canAccess('admin.restaurant_area.destroy');
    $canRestaurantAreaCreate=canAccess('admin.restaurant_area.create');
    $canRestaurantAreaShow=canAccess('admin.restaurant_area.show');

    $canOperationHourRelation=canAccess('admin.operation_hour.relation');
    $canOperationHourEdit=canAccess('admin.operation_hour.edit');
    $canOperationHourDestroy=canAccess('admin.operation_hour.destroy');
    $canOperationHourCreate=canAccess('admin.operation_hour.create');
    $canOperationHourShow=canAccess('admin.operation_hour.show');

    $canCartRelation=canAccess('admin.cart.relation');
    $canCartEdit=canAccess('admin.cart.edit');
    $canCartDestroy=canAccess('admin.cart.destroy');
    $canCartCreate=canAccess('admin.cart.create');
    $canCartShow=canAccess('admin.cart.show');

    $canRestaurantUsersRelation=canAccess('admin.restaurant_users.relation');
    $canRestaurantUsersEdit=canAccess('admin.restaurant_users.edit');
    $canRestaurantUsersDestroy=canAccess('admin.restaurant_users.destroy');
    $canRestaurantUsersCreate=canAccess('admin.restaurant_users.create');
    $canRestaurantUsersShow=canAccess('admin.restaurant_users.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.restaurant') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.restaurant') }}</a></li>
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
                            <h3 class="box-title m-b-0">{{ trans('general.restaurant') }}</h3>
                            <p class="text-muted m-b-40">{{ trans('general.details') }}</p>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active">
                                    <a href="#idetail" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-home"></i>{{trans('general.detail')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#category" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.category')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#deliveryMenu" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.delivery_menu')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#restaurantRate" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.restaurant_rate')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#restaurantCuisine" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.restaurant_cuisine')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#menuSection" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.menu_section')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#dish" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.dish')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#dishRate" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.dish_rate')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#restaurantArea" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.restaurant_area')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#operationHour" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.operation_hour')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#cart" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.cart')}}</span></a>
                                </li>

                                
                                <li role="presentation" >
                                    <a href="#restaurantUsers" aria-controls="detail" role="tab" data-toggle="tab" aria-expanded="true"><span><i class="ti-list"></i>{{trans('general.restaurant_users')}}</span></a>
                                </li>

                                

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane active" id="idetail">


                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">{{ trans('restaurant.restaurantInfo') }}</span>
                                        </div>

                                        <div class="panel-body">


                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.name_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$restaurant['name_en'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.name_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['name_ar']))
                                                    <label class="control-label">{{$restaurant['name_ar'] }}</label>
                                                    @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">

                                                    <label class="control-label">{{ trans('restaurant.Owner_first_name') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                   @if(isset($restaurant['Owner_first_name']))
                                                    <label class="control-label">{{$restaurant['Owner_first_name'] }}</label>
                                                    @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.Owner_last_name') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['Owner_last_name']))
                                                    <label class="control-label">{{$restaurant['Owner_last_name'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.email') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['email']))
                                                    <label class="control-label">{{$restaurant['email'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.available_payment') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['available_payment']))
                                                    <label class="control-label">{{$restaurant['available_payment'] }}</label>
                                                    @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.telephone') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                   @if(isset($restaurant['telephone']))
                                                    <label class="control-label">{{$restaurant['telephone'] }}</label>
                                                    @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.status') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['status']))
                                                    <label class="control-label">{{ config('array.restaurant_status')[$restaurant['status']] }}</label>
                                                    @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.min_amount') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['min_amount']))
                                                    <label class="control-label">{{$restaurant['min_amount'] }}</label>
                                                    @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.working_hour_from') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['working_hour_from']))
                                                    <label class="control-label">{{$restaurant['working_hour_from'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">

                                                    <label class="control-label">{{ trans('restaurant.working_hour_to') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['working_hour_to']))
                                                    <label class="control-label">{{$restaurant['working_hour_to'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.deliver_time_from') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['deliver_time_from']))
                                                    <label class="control-label">{{$restaurant['deliver_time_from'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.deliver_time_to') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['deliver_time_to']))
                                                    <label class="control-label">{{$restaurant['deliver_time_to'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.deliver_charge') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['deliver_charge']))
                                                    <label class="control-label">{{$restaurant['deliver_charge'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.rating') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['rating']))
                                                    <label class="control-label">{{$restaurant['rating'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.show_menu') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['show_menu']))
                                                    <label class="control-label">{{ config('array.restaurant_show_menu')[$restaurant['show_menu']] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.order_accept_days') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['order_accept_days']))
                                                    <label class="control-label">{{$restaurant['order_accept_days'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.offline_order') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['offline_order']))
                                                    <label class="control-label">{{ config('array.restaurant_offline_order')[$restaurant['offline_order']] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.url') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['url']))
                                                    <label class="control-label">{{$restaurant['url'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.img') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['img']))
                                                    <label class="control-label">{{$restaurant['img'] }}</label>
                                                    @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.commission_type') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['commission_type']))
                                                    <label class="control-label">{{ config('array.restaurant_commission_type')[$restaurant['commission_type']] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.discount_type') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['discount_type']))
                                                    <label class="control-label">{{ config('array.restaurant_discount_type')[$restaurant['discount_type']] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.discount') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['discount']))
                                                    <label class="control-label">{{$restaurant['discount'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('general.area') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{isset($restaurant->area->name_en)?$restaurant->area->name_en:'' }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.follow_us') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['follow_us']))
                                                    <label class="control-label">{{ config('array.restaurant_follow_us')[$restaurant['follow_us']] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.notification') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ config('array.restaurant_notification')[$restaurant['notification']] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.address_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                   @if(isset($restaurant['address_en']))
                                                    <label class="control-label">{{$restaurant['address_en'] }}</label>
                                                   @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.address_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['address_ar']))
                                                    <label class="control-label">{{$restaurant['address_ar'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.description_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['description_en']))
                                                    <label class="control-label">{{$restaurant['description_en'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.description_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['description_ar']))
                                                    <label class="control-label">{{$restaurant['description_ar'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.summary_en') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['summary_en']))
                                                    <label class="control-label">{{$restaurant['summary_en'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.summary_ar') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                @if(isset($restaurant['summary_ar']))
                                                    <label class="control-label">{{$restaurant['summary_ar'] }}</label>
                                                @endif
                                                </div>
                                            </div>

                                            </div>
                                                                                        <div class="row">                                            <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.created_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$restaurant['created_at'] }}</label>
                                                </div>
                                            </div>

                                            
                                                                                                                                    <div class="col-sm-2 text-right">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{ trans('restaurant.updated_at') }}  </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-left">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label">{{$restaurant['updated_at'] }}</label>
                                                </div>
                                            </div>

                                            </div>
                                            



                                            <div class="row">

                                                <div class="col-xs-offset-6 col-xs-3">

                                                    @if($canEdit)
                                                        <a href="/admin/restaurant/{{ $restaurant['id'] }}/edit"
                                                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                                                    @endif
                                                </div>
                                                <div class=" col-xs-3">
                                                    @if($canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                'url' => ['/admin/restaurant',$restaurant['id']]]) !!}
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




                                                                @if( $canCategoryRelation)
                                <div role="tabpanel" class="tab-pane active" id="category">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('category.categoryTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('category.categoryTableDescription') }}</p>



                                                    </div>

                                                    @if( $canCategoryCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.category.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('category.categoryCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('category.id'), 'id', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('category.name_en'), 'name_en', $oCategoryResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('category.min_quantity'), 'min_quantity', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('category.max_quantity'), 'max_quantity', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('category.created_at'), 'created_at', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('category.updated_at'), 'updated_at', $oCategoryResults) !!}
                                                            </th>

                                                                                                                        @if($canCategoryShow
                                                            || $canCategoryEdit
                                                            || $canCategoryDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oCategoryResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oCategoryResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>


                                                                                                                                        <td>{{ $oResult->min_quantity }}</td>

                                                                                                                                        <td>{{ $oResult->max_quantity }}</td>



                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canCategoryDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/category',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canCategoryEdit)
                                                                                    <a href="/admin/category/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canCategoryShow )
                                                                                    <a href="/admin/category/{{ $oResult->id }}"
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
                                                    @if (count($oCategoryResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oCategoryResults->firstItem() }} {{trans('general.to')}} {{ $oCategoryResults->lastItem() }} {{trans('general.of')}} {{ $oCategoryResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oCategoryResults->appends(Input::except('page_category'))->appends($request->all())->render()) !!}
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
                                                                @if( $canDeliveryMenuRelation)
                                <div role="tabpanel" class="tab-pane active" id="deliveryMenu">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('delivery_menu.delivery_menuTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('delivery_menu.delivery_menuTableDescription') }}</p>



                                                    </div>

                                                    @if( $canDeliveryMenuCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.delivery_menu.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('delivery_menu.delivery_menuCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('delivery_menu.id'), 'id', $oDeliveryMenuResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('delivery_menu.name_en'), 'name_en', $oDeliveryMenuResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('delivery_menu.status'), 'status', $oDeliveryMenuResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('delivery_menu.created_at'), 'created_at', $oDeliveryMenuResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('delivery_menu.updated_at'), 'updated_at', $oDeliveryMenuResults) !!}
                                                            </th>

                                                                                                                        @if($canDeliveryMenuShow
                                                            || $canDeliveryMenuEdit
                                                            || $canDeliveryMenuDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oDeliveryMenuResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oDeliveryMenuResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>



                                                                                                                                        <td>{{ config('array.delivery_menu_status')[$oResult->status] }}</td>


                                                                                                                                        <td>{{ $oResult->created_at }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canDeliveryMenuDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/delivery_menu',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canDeliveryMenuEdit)
                                                                                    <a href="/admin/delivery_menu/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canDeliveryMenuShow )
                                                                                    <a href="/admin/delivery_menu/{{ $oResult->id }}"
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
                                                    @if (count($oDeliveryMenuResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oDeliveryMenuResults->firstItem() }} {{trans('general.to')}} {{ $oDeliveryMenuResults->lastItem() }} {{trans('general.of')}} {{ $oDeliveryMenuResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oDeliveryMenuResults->appends(Input::except('page_delivery_menu'))->appends($request->all())->render()) !!}
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
                                                                @if( $canRestaurantRateRelation)
                                <div role="tabpanel" class="tab-pane active" id="restaurantRate">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('restaurant_rate.restaurant_rateTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('restaurant_rate.restaurant_rateTableDescription') }}</p>



                                                    </div>

                                                    @if( $canRestaurantRateCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.restaurant_rate.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('restaurant_rate.restaurant_rateCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('restaurant_rate.id'), 'id', $oRestaurantRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('restaurant_rate.users_id'), 'users_id', $oRestaurantRateResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('restaurant_rate.rate'), 'rate', $oRestaurantRateResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('restaurant_rate.status'), 'status', $oRestaurantRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('restaurant_rate.notification'), 'notification', $oRestaurantRateResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('restaurant_rate.updated_at'), 'updated_at', $oRestaurantRateResults) !!}
                                                            </th>

                                                                                                                        @if($canRestaurantRateShow
                                                            || $canRestaurantRateEdit
                                                            || $canRestaurantRateDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oRestaurantRateResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oRestaurantRateResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users->first_name }}</td>


                                                                                                                                        <td>{{ $oResult->rate }}</td>


                                                                                                                                        <td>{{ config('array.restaurant_rate_status')[ $oResult->status] }}</td>

                                                                                                                                        <td>{{ config('array.restaurant_rate_notification')[ $oResult->notification] }}</td>

                                                                                                                                        <td>{{ $oResult->updated_at }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canRestaurantRateDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/restaurant_rate',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canRestaurantRateEdit)
                                                                                    <a href="/admin/restaurant_rate/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canRestaurantRateShow )
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
                                                    @if (count($oRestaurantRateResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oRestaurantRateResults->firstItem() }} {{trans('general.to')}} {{ $oRestaurantRateResults->lastItem() }} {{trans('general.of')}} {{ $oRestaurantRateResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oRestaurantRateResults->appends(Input::except('page_restaurant_rate'))->appends($request->all())->render()) !!}
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
                                                                @if( $canRestaurantCuisineRelation)
                                <div role="tabpanel" class="tab-pane active" id="restaurantCuisine">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('restaurant_cuisine.restaurant_cuisineTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('restaurant_cuisine.restaurant_cuisineTableDescription') }}</p>



                                                    </div>

                                                    @if( $canRestaurantCuisineCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.restaurant_cuisine.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('restaurant_cuisine.restaurant_cuisineCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('restaurant_cuisine.id'), 'id', $oRestaurantCuisineResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.restaurant'), 'restaurant_id', $oRestaurantCuisineResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('general.cuisine'), 'cuisine_id', $oRestaurantCuisineResults) !!}
                                                            </th>

                                                                                                                        @if($canRestaurantCuisineShow
                                                            || $canRestaurantCuisineEdit
                                                            || $canRestaurantCuisineDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oRestaurantCuisineResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oRestaurantCuisineResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->restaurant->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->cuisine->name_en }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canRestaurantCuisineDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/restaurant_cuisine',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canRestaurantCuisineEdit)
                                                                                    <a href="/admin/restaurant_cuisine/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canRestaurantCuisineShow )
                                                                                    <a href="/admin/restaurant_cuisine/{{ $oResult->id }}"
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
                                                    @if (count($oRestaurantCuisineResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oRestaurantCuisineResults->firstItem() }} {{trans('general.to')}} {{ $oRestaurantCuisineResults->lastItem() }} {{trans('general.of')}} {{ $oRestaurantCuisineResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oRestaurantCuisineResults->appends(Input::except('page_restaurant_cuisine'))->appends($request->all())->render()) !!}
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
                                                                @if( $canMenuSectionRelation)
                                <div role="tabpanel" class="tab-pane active" id="menuSection">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('menu_section.menu_sectionTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('menu_section.menu_sectionTableDescription') }}</p>



                                                    </div>

                                                    @if( $canMenuSectionCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.menu_section.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('menu_section.menu_sectionCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('menu_section.id'), 'id', $oMenuSectionResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('menu_section.name_en'), 'name_en', $oMenuSectionResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('general.restaurant'), 'restaurant_id', $oMenuSectionResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('menu_section.status'), 'status', $oMenuSectionResults) !!}
                                                            </th>



                                                                                                                        @if($canMenuSectionShow
                                                            || $canMenuSectionEdit
                                                            || $canMenuSectionDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oMenuSectionResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oMenuSectionResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->name_en }}</td>


                                                                                                                                        <td>{{ $oResult->restaurant->name_en }}</td>

                                                                                                                                        <td>{{ config('array.menu_section_status')[$oResult->status] }}</td>


                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canMenuSectionDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/menu_section',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canMenuSectionEdit)
                                                                                    <a href="/admin/menu_section/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canMenuSectionShow )
                                                                                    <a href="/admin/menu_section/{{ $oResult->id }}"
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
                                                    @if (count($oMenuSectionResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oMenuSectionResults->firstItem() }} {{trans('general.to')}} {{ $oMenuSectionResults->lastItem() }} {{trans('general.of')}} {{ $oMenuSectionResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oMenuSectionResults->appends(Input::except('page_menu_section'))->appends($request->all())->render()) !!}
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
                                                            <a  href="{{route('admin.dish.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
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






                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('dish.price'), 'price', $oDishResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                                {!! th_sort(trans('dish.quantity'), 'quantity', $oDishResults) !!}
                                                            </th>




                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                                                {!! th_sort(trans('dish.status'), 'status', $oDishResults) !!}
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

                                                                                                                                        <td>
                                                                                                                                            <img style="width:40px;height:40px;" src="{{ $oResult->img }}">
                                                                                                                                            {{ $oResult->name_en }}</td>


                                                                                                                                        <td>{{ $oResult->price }}</td>

                                                                                                                                        <td>{{ $oResult->quantity }}</td>



                                                                                                                                        <td>{{ config('array.dish_status')[$oResult->status] }}</td>


                                                                    
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
                                                                @if( $canDishRateRelation)
                                <div role="tabpanel" class="tab-pane active" id="dishRate">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('dish_rate.dish_rateTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('dish_rate.dish_rateTableDescription') }}</p>



                                                    </div>

                                                    @if( $canDishRateCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.dish_rate.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('dish_rate.dish_rateCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('dish_rate.id'), 'id', $oDishRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.users'), 'users_id', $oDishRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('dish_rate.rate'), 'rate', $oDishRateResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                                {!! th_sort(trans('dish_rate.status'), 'status', $oDishRateResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('dish_rate.notification'), 'notification', $oDishRateResults) !!}
                                                            </th>


                                                                                                                        @if($canDishRateShow
                                                            || $canDishRateEdit
                                                            || $canDishRateDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oDishRateResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oDishRateResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users->first_name }}</td>


                                                                                                                                        <td>{{ $oResult->rate }}</td>


                                                                                                                                        <td>{{config('array.dish_rate_status')[ $oResult->status] }}</td>

                                                                                                                                        <td>{{ config('array.dish_rate_notification')[$oResult->notification] }}</td>


                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canDishRateDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/dish_rate',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canDishRateEdit)
                                                                                    <a href="/admin/dish_rate/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canDishRateShow )
                                                                                    <a href="/admin/dish_rate/{{ $oResult->id }}"
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
                                                    @if (count($oDishRateResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oDishRateResults->firstItem() }} {{trans('general.to')}} {{ $oDishRateResults->lastItem() }} {{trans('general.of')}} {{ $oDishRateResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oDishRateResults->appends(Input::except('page_dish_rate'))->appends($request->all())->render()) !!}
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
                                                            <a  href="{{route('admin.restaurant_area.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
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
                                                                {!! th_sort(trans('general.area'), 'area_id', $oRestaurantAreaResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('restaurant_area.delivery_charges'), 'delivery_charges', $oRestaurantAreaResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('restaurant_area.sahalat_charge'), 'sahalat_charge', $oRestaurantAreaResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('restaurant_area.status'), 'status', $oRestaurantAreaResults) !!}
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

                                                                                                                                        <td>{{ $oResult->area->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->delivery_charges }}</td>

                                                                                                                                        <td>{{ $oResult->sahalat_charge }}</td>


                                                                                                                                        <td>{{ config('array.restaurant_area_status')[$oResult->status] }}</td>


                                                                    
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
                                                                @if( $canOperationHourRelation)
                                <div role="tabpanel" class="tab-pane active" id="operationHour">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('operation_hour.operation_hourTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('operation_hour.operation_hourTableDescription') }}</p>



                                                    </div>

                                                    @if( $canOperationHourCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.operation_hour.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('operation_hour.operation_hourCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('operation_hour.id'), 'id', $oOperationHourResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.area'), 'restaurant_area_id', $oOperationHourResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('general.restaurant'), 'restaurant_id', $oOperationHourResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('operation_hour.day'), 'day', $oOperationHourResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('operation_hour.shift1_from'), 'shift1_from', $oOperationHourResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                                {!! th_sort(trans('operation_hour.shift2_to'), 'shift2_to', $oOperationHourResults) !!}
                                                            </th>



                                                                                                                        @if($canOperationHourShow
                                                            || $canOperationHourEdit
                                                            || $canOperationHourDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oOperationHourResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oOperationHourResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->restaurant_area->area->name_en }}</td>

                                                                                                                                        <td>{{ $oResult->restaurant->name_en }}</td>

                                                                                                                                        <td>{{ config('array.days')[$oResult->day] }}</td>

                                                                                                                                        <td>{{ $oResult->shift1_from }}</td>


                                                                                                                                        <td>{{ $oResult->shift2_to }}</td>


                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canOperationHourDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/operation_hour',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canOperationHourEdit)
                                                                                    <a href="/admin/operation_hour/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canOperationHourShow )
                                                                                    <a href="/admin/operation_hour/{{ $oResult->id }}"
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
                                                    @if (count($oOperationHourResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oOperationHourResults->firstItem() }} {{trans('general.to')}} {{ $oOperationHourResults->lastItem() }} {{trans('general.of')}} {{ $oOperationHourResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oOperationHourResults->appends(Input::except('page_operation_hour'))->appends($request->all())->render()) !!}
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
                                                                @if( $canCartRelation)
                                <div role="tabpanel" class="tab-pane active" id="cart">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('cart.cartTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('cart.cartTableDescription') }}</p>



                                                    </div>

                                                    @if( $canCartCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.cart.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('cart.cartCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('cart.id'), 'id', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.users'), 'users_id', $oCartResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('general.dish'), 'dish_id', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('cart.order_id'), 'order_id', $oCartResults) !!}
                                                            </th>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                                {!! th_sort(trans('cart.quantity'), 'quantity', $oCartResults) !!}
                                                            </th>



                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                                {!! th_sort(trans('cart.total_price'), 'total_price', $oCartResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                                {!! th_sort(trans('cart.special_request'), 'special_request', $oCartResults) !!}
                                                            </th>


                                                                                                                        @if($canCartShow
                                                            || $canCartEdit
                                                            || $canCartDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oCartResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oCartResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users->first_name }}</td>

                                                                                                                                        <td>{{ $oResult->dish->name_en }}</td>

                                                                    <td><a href="/admin/order/{{ $oResult->order_id }}">#{{ $oResult->order_id }}</a></td>

                                                                    <td>{{ $oResult->quantity  }}</td>
                                                                    <td>{{ $oResult->quantity *$oResult->unit_price }}</td>

                                                                                                                                        <td>{{ $oResult->special_request }}</td>

                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canCartDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/cart',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canCartEdit)
                                                                                    <a href="/admin/cart/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canCartShow )
                                                                                    <a href="/admin/cart/{{ $oResult->id }}"
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
                                                    @if (count($oCartResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oCartResults->firstItem() }} {{trans('general.to')}} {{ $oCartResults->lastItem() }} {{trans('general.of')}} {{ $oCartResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oCartResults->appends(Input::except('page_cart'))->appends($request->all())->render()) !!}
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
                                                                @if( $canRestaurantUsersRelation)
                                <div role="tabpanel" class="tab-pane active" id="restaurantUsers">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="white-box">



                                                    @include('common.partials.messages')

                                                    <div class=" col-xs-9">
                                                        <h3 class="box-title m-b-0">{{ trans('restaurant_users.restaurant_usersTableHead') }}</h3>
                                                        <p class="text-muted m-b-20">{{ trans('restaurant_users.restaurant_usersTableDescription') }}</p>



                                                    </div>

                                                    @if( $canRestaurantUsersCreate)
                                                        <div class="col-xs-3">
                                                            <a  href="{{route('admin.restaurant_users.create')}}?restaurant_id={{$restaurant['id'] }}"class="btn btn-primary form-control">
                                                                + {{trans('restaurant_users.restaurant_usersCreate')}}
                                                            </a>
                                                        </div>
                                                    @endif

                                                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                                        <thead>
                                                        <tr>


                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                                {!! th_sort(trans('restaurant_users.id'), 'id', $oRestaurantUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                                {!! th_sort(trans('general.users'), 'users_id', $oRestaurantUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                                {!! th_sort(trans('general.restaurant'), 'restaurant_id', $oRestaurantUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                                {!! th_sort(trans('restaurant_users.status'), 'status', $oRestaurantUsersResults) !!}
                                                            </th>

                                                                                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                                {!! th_sort(trans('restaurant_users.type'), 'type', $oRestaurantUsersResults) !!}
                                                            </th>


                                                                                                                        @if($canRestaurantUsersShow
                                                            || $canRestaurantUsersEdit
                                                            || $canRestaurantUsersDestroy
                                                            )
                                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                                            @endif
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($oRestaurantUsersResults))
                                                            {{-- */$i=0;/* --}}
                                                            {{-- */$class='';/* --}}
                                                            @foreach($oRestaurantUsersResults as $oResult)
                                                                {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                                <tr class='{{ $class }}'>

                                                                                                                                        <td>{{ $oResult->id }}</td>

                                                                                                                                        <td>{{ $oResult->users->first_name }}</td>

                                                                                                                                        <td>{{ $oResult->restaurant->name_en }}</td>

                                                                                                                                        <td>{{ config('array.restaurant_users_status')[$oResult->status] }}</td>

                                                                                                                                        <td>{{ config('array.restaurant_users_type')[$oResult->type] }}</td>



                                                                    
                                                                    <td>

                                                                        <div class="tableActionsMenuDiv">
                                                                            <div class="innerContainer">
                                                                                <i class="fa fa-list menuIconList"></i>

                                                                                @if($canRestaurantUsersDestroy )
                                                                                    {!! Form::open(['method' => 'DELETE',
                                                                                    'url' => ['/admin/restaurant_users',$oResult->id]]) !!}
                                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                                        <i class="fa fa-trash"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                @endif

                                                                                @if( $canRestaurantUsersEdit)
                                                                                    <a href="/admin/restaurant_users/{{ $oResult->id }}/edit"
                                                                                       class="fa fa-edit"></a>
                                                                                @endif
                                                                                @if($canRestaurantUsersShow )
                                                                                    <a href="/admin/restaurant_users/{{ $oResult->id }}"
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
                                                    @if (count($oRestaurantUsersResults))
                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <span class="text-xs">{{trans('general.showing')}} {{ $oRestaurantUsersResults->firstItem() }} {{trans('general.to')}} {{ $oRestaurantUsersResults->lastItem() }} {{trans('general.of')}} {{ $oRestaurantUsersResults->total() }} {{trans('general.entries')}}</span>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-6 ">
                                                                {!! str_replace('/?', '?', $oRestaurantUsersResults->appends(Input::except('page_restaurant_users'))->appends($request->all())->render()) !!}
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