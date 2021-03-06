<?php

Route::group(['middleware' => ['website.authorization'],'namespace' => 'website\users'], function () {
//    Route::get('/restaurant/menuItem', 'Restaurant@getMenuItem')->name('menuItem');
    Route::resource('users', 'Users'); 
    
 // Route::resource('/users/{id}/resetForgetPassword', 'Users@update'); 

    Route::resource('order', 'Order');

    Route::get('/invoice/{id}','Order@invoice');
    Route::post('/order/getpacitoken', 'Order@getpacitoken')->name('getpacitoken');

    Route::get('signin', 'Users@getLogin');

Route::post('signin','Users@postLogin');

});

