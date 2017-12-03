<?php

Route::group(['middleware' => [],'prefix' => 'admin', 'namespace' => 'admin\service_company_order'], function () {


    Route::any('service_company_order/update-status', 'ServiceCompanyOrder@updateStatus');
    Route::any('service_company_order/dispatcher-map', 'ServiceCompanyOrder@getDispatcherMap');
    Route::any('service_company_order/assign-service-boy', 'ServiceCompanyOrder@assignServiceBoy');




});
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\service_company_order'], function () {


    Route::resource('service_company_order', 'ServiceCompanyOrder');


});



