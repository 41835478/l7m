<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\order_driver'], function () {


    Route::any('order_driver/update-order-driver', 'OrderDriver@updatePublic')->name('admin.update.order_driver');


Route::any('order_driver/update-order-driver-group', 'OrderDriver@updatePublicGroup')->name('admin.update.order_driver_group');

Route::any('order_driver/issue_report', 'OrderDriver@UpdatReport')->name('admin.update.report_issue');



Route::any('order_driver/SendNotification', 'OrderDriver@SendNotification')->name('admin.sendnotifaication');



    Route::get('/dispatcher-map', 'OrderDriver@getDispatcherMap')->name('admin.dispatcher.map');
    Route::get('/driver-map', 'OrderDriver@getDriverMap')->name('admin.driver.map');
 

    Route::get('/all-orders-map', 'OrderDriver@getAllOrdersMap')->name('admin.order.allmap');




    Route::controller('order_driver/chart', 'Chart', [
        'getBarChart' => 'admin.order_driver.chart.barChart',
        'getPieChart' => 'admin.order_driver.chart.pieChart',
        'getAttendChart'=> 'admin.order_driver.chart.attendChart',
    ]);

    Route::resource('order_driver', 'OrderDriver');


});

Route::group(['middleware' => [],'prefix' => 'admin', 'namespace' => 'admin\order_driver'], function () {

   Route::get('/order-map', 'OrderDriver@getOrderMap')->name('admin.order.map');

});
