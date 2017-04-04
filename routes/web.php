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
    	Route::group(['prefix' => 'khuyenmailoai1'],function(){
    		Route::get('danhsach', 'Event1Controll@getEvent1List')->name('getEvent1List');
    		Route::get('them', 'Event1Controll@getEvent1Add')->name('getEvent1Add');
    		Route::post('them', 'Event1Controll@postEvent1Add')->name('postEvent1Add');
    		Route::get('xoa/{id}', 'Event1Controll@getEvent1Delete')->name('getEvent1Delete')->where('id', '[0-9]+');
    		route::get('sua/{id}', 'Event1Controll@getEvent1Edit')->name('getEvent1Edit')->where('id', '[0-9]+');
    		Route::post('sua/{id}', 'Event1Controll@postEvent1Edit')->name('postEvent1Edit')->where('id', '[0-9]+');
    	});
    	Route::group(['prefix' => 'taikhoan'],function(){
    		Route::get('danhsach', 'UserController@getUserList')->name('getUserList');
    		Route::get('them', 'UserController@getUserAdd')->name('getUserAdd');
    		Route::post('them', 'UserController@postUserAdd')->name('postUserAdd');
    		Route::get('xoa/{id}', 'UserController@getUserDelete')->name('getUserDelete')->where('id', '[0-9]+');
    		route::get('sua/{id}', 'UserController@getUserEdit')->name('getUserEdit')->where('id', '[0-9]+');
    		Route::post('sua/{id}', 'UserController@postUserEdit')->name('postUserEdit')->where('id', '[0-9]+');
    	});
    	Route::group(['prefix' => 'sanpham'],function(){
    		Route::get('danhsach', 'productController@getProductList')->name('getProductList');
    		Route::get('them', 'productController@getProductAdd')->name('getProductAdd');
    		Route::post('them', 'productController@postProductAdd')->name('postProductAdd');
    	});
    	Route::group(['prefix' => 'thongso'],function(){
    		Route::get('themthongso', 'parameterController@getparaadd')->name('getparaadd');
    		Route::post('themthongso', 'parameterController@postparaadd')->name('postparaadd');
    		Route::get('danhsach', 'parameterController@getParaList')->name('getParaList');
    		Route::get('xoa/{id}', 'parameterController@getParaDel')->name('getParaDel')->where('id', '[0-9]+');
    		route::get('sua/{id}', 'parameterController@getParaEdit')->name('getParaEdit')->where('id', '[0-9]+');
    		Route::post('sua/{id}', 'parameterController@postParaEdit')->name('postParaEdit')->where('id', '[0-9]+');
    	});
    });
});