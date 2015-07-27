<?php

Route::get('/', [
    'as' => 'home',
    'uses' => '\App\Http\Controllers\PagesController@getIndex'
]);

/**
 *  Auth
 */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('/openorders', [
    'middleware' => 'auth',
    'uses' => '\App\Http\Controllers\OdersController@openorders'
]);

Route::get('/order/delete/{code}', function($code) {
    \App\Openorder::where('code', $code)->first()->delete();
    return redirect('home');
});

/**
 * Bestellung
 */
Route::get('/order', [
    'as' => 'order',
    'uses' => '\App\Http\Controllers\OdersController@getOrder'
]);

Route::get('/order/type/{type}', [
    'as' => 'order.type',
    'uses' => '\App\Http\Controllers\OdersController@shoppingCart'
]);

Route::get('/order/checkout', [
    'as' => 'order',
    'uses' => '\App\Http\Controllers\OdersController@getCheckout'
]);

Route::get('/order/finish' , [
    'as' => 'order.finish',
    'uses' => '\App\Http\Controllers\OdersController@orderFinish'
]);