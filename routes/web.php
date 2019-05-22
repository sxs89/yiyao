<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//接口路由
Route::get('api/login','Api\LoginController@index');
Route::post('api/check','Api\LoginController@check');

//注册路由
Route::get('api/register','Api\LoginController@register');
Route::post('api/recheck','Api\LoginController@registerCheck');

//接收温度数据路由
Route::get('api/temper','Api\TemperatureController@index');

//手机与测温仪设置路由
Route::post('api/setting','Api\TemperatureController@setting');



Route::get('flight','FlightController@test03');
Route::get('save','FlightController@save');
Route::get('update','FlightController@update');