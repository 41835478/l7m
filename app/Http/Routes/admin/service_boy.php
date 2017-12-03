<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\service_boy'], function () {


    Route::get('service_boy/update-user-status', 'ServiceBoy@updateUserStatus');
    Route::get('service_boy/get-user-status', 'ServiceBoy@getUserStatus');
    Route::resource('service_boy', 'ServiceBoy');


});

