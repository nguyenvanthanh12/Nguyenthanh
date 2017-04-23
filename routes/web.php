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

Route::group(['prefix' => '/', 'namespace' => 'FrontEnd'], function(){
	Route::get('/', 'FrontEndController@index')->name('index');
	Route::get('loai-san-pham/{id}/{TenKhongDau}', 'FrontEndController@getCate')->name('getCate')->where('id', '[0-9]+');
	Route::get('chi-tiet-san-pham/{id}/{TenKhongDau}', 'FrontEndController@getDetail')->name('getDetail')->where('id', '[0-9]+');
	Route::get('lien-he', 'FrontEndController@getLienhe')->name('getLienhe');
	Route::post('lien-he', 'FrontEndController@postLienhe')->name('postLienhe');
	Route::get('mua-hang/{id}/{TenKhongDau}', 'FrontEndController@getShopping')->name('getShopping');
	Route::get('gio-hang', 'FrontEndController@getGiohang')->name('getGiohang');
	Route::post('gio-hang', 'FrontEndController@postGiohang')->name('postGiohang');
	Route::get('xoa-san-pham/{id}', 'FrontEndController@getDel')->name('getDel');
	Route::get('dang-ky', 'RegisterController@getRegister')->name('getRegister');
	Route::post('dang-ky', 'RegisterController@postRegister')->name('postRegister');
	Route::get('dang-nhap', 'RegisterController@getLogin')->name('getLogin');
	Route::post('dang-nhap', 'RegisterController@postLogin')->name('postLogin');
	Route::get('dang-xuat', 'RegisterController@getDangxuat')->name('getDangxuat');
});









Route::get('form', function(){
	return view('admin.blocks.form');
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

    	Route::group(['prefix' => 'su-kien-khuyen-mai'],function(){
    		Route::get('danh-sach', 'EventController@getEventList')->name('getEventList');
    		Route::get('them', 'EventController@getEventAdd')->name('getEventAdd');
    		Route::post('them', 'EventController@postEventAdd')->name('postEventAdd');
    		Route::get('xoa/{id}', 'EventController@getEventDelete')->name('getEventDelete')->where('id', '[0-9]+');
    		route::get('sua/{id}', 'EventController@getEventEdit')->name('getEventEdit')->where('id', '[0-9]+');
    		Route::post('sua/{id}', 'EventController@postEventEdit')->name('postEventEdit')->where('id', '[0-9]+');
    	});

    	Route::group(['prefix' => 'san-pham-khuyen-mai'],function(){
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
    		Route::get('xoa/{id}', 'productController@getProductDel')->name('getProductDel')->where('id', '[0-9]+');
    		route::get('sua/{id}', 'productController@getProductEdit')->name('getProductEdit')->where('id', '[0-9]+');
    		Route::post('sua/{id}', 'productController@postProductEdit')->name('postProductEdit')->where('id', '[0-9]+');
    		Route::get('delImg/{id}', 'productController@getDelImg')->name('getDelImg');
    	});
    	Route::group(['prefix' => 'thongso'],function(){
    		Route::get('themthongso', 'parameterController@getparaadd')->name('getparaadd');
    		Route::post('themthongso', 'parameterController@postparaadd')->name('postparaadd');
    		Route::get('danhsach', 'parameterController@getParaList')->name('getParaList');
    		Route::get('xoa/{id}', 'parameterController@getParaDel')->name('getParaDel')->where('id', '[0-9]+');
    		route::get('sua/{id}', 'parameterController@getParaEdit')->name('getParaEdit')->where('id', '[0-9]+');
    		Route::post('sua/{id}', 'parameterController@postParaEdit')->name('postParaEdit')->where('id', '[0-9]+');
    	});
    	Route::group(['prefix' => 'lienhe'],function(){
    		Route::get('danhsach', 'ContactController@getContactList')->name('getContactList');
    		Route::get('setting/{id}', 'ContactController@getSetting')->name('getSetting')->where('id', '[0-9]+');
    	});
    	Route::group(['prefix' => 'don-hang'],function(){
    		Route::get('danhsach', 'OrderController@getListOrder')->name('getListOrder');
    		Route::get('order-setting/{id}', 'OrderController@getOrderSt')->name('getOrderSt')->where('id', '[0-9]+');
    		Route::get('chi-tiet-don-hang/{id}', 'OrderController@getDetailOrder')->name('getDetailOrder')->where('id', '[0-9]+');
    	});
    });
});
