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
Route::get('ts_login', 'LoginController@getLogin')->name('getLogin');
Route::post('ts_login', 'LoginController@postLogin')->name('postLogin');
Route::get('logout', 'LoginController@getLogout')->name('getLogout');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'thql_admin', 'namespace' => 'Admin'], function(){
    	Route::get('/',function(){
    		return view('admin.blocks.thongke');
    	});
    	Route::group(['prefix' => 'loaisanpham'],function(){
    		Route::get('them', 'CateController@getCateAdd')->name('getCateAdd');
    		Route::post('them', 'CateController@postCateAdd')->name('postCateAdd');
    		route::get('danhsach', 'CateController@getCateList')->name('getCateList');
    		Route::get('xoa/{id}', 'CateController@getCateDelete')->name('getCateDelete')->where('id', '[0-9]+');
    		route::get('sua/{id}', 'CateController@getCateEdit')->name('getCateEdit')->where('id', '[0-9]+');
    		Route::post('sua/{id}', 'CateController@postCateEdit')->name('postCateEdit')->where('id', '[0-9]+');
    	});
    });
});