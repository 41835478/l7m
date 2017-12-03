<?php
Route::group(['middleware' => ['authenticate.admin'],'prefix' => 'admin', 'namespace' => 'admin\restaurant_users'], function () {

    Route::get('restaurant_users/update-user-status', 'RestaurantUsers@updateUserStatus');
    Route::get('restaurant_users/get-user-status', 'RestaurantUsers@getUserStatus');

    Route::resource('restaurant_users', 'RestaurantUsers');


});

