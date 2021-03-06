<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('user/create', 'Auth\RegisterController@create');

Route::post('user/login', 'Auth\LoginController@login');

Route::group(['middleware' => ['auth']], function() {
    
    });
    Route::middleware('auth:api')->get('myOrders', 'OrderController@myOrders');
    Route::middleware('auth:api')->get('logout', 'Auth\LoginController@logout');

    // URL::forceScheme('https');
   

    Route::middleware('auth:api')->resource('orders', 'OrderController');

    Route::middleware('auth:api')->resource('orderAddresses', 'OrderAddressController');

    Route::resource('cities', 'CityController');

    Route::resource('orderItems', 'OrderItemController');