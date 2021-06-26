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

// Trang chu
Route::get('/', 'ShopController@index');

// Trang liên hệ
Route::get('/lien-he', 'ShopController@contact');
Route::post('/postContact', 'ShopController@postContact')->name('shop.postContact');

// Trang danh mục
Route::get('/danh-muc-san-pham', 'ShopController@listProducts');

// Trang chi tiết sản phẩm
Route::get('/chi-tiet-san-pham', 'ShopController@detailProduct');

// Trang danh sach tin tuc
Route::get('/tin-tuc', 'ShopController@listArticles');

// Trang chi tiet tin tuc
Route::get('/chi-tiet-tin-tuc', 'ShopController@detailArticle');

// Trang dat hang
Route::get('/dat-hang', 'CartController@index');

Route::get('/admin/login', 'LoginController@index')->name('admin.login');
Route::post('/admin/postLogin', 'LoginController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'LoginController@logout')->name('admin.logout');

// Gom nhóm route của trang admin thông qua hàm group
Route::group(['prefix' => 'admin','as' => 'admin.', 'middleware' => 'checkLogin'], function() {
    //giúp cho chúng ta tạo các url  tương ứng với controller truyền vào
    Route::resource('category', 'CategoryController');
    Route::resource('banner', 'BannerController');
    Route::resource('product', 'ProductController');
    Route::resource('vendor', 'VendorController');
    Route::resource('user', 'UserController');
    Route::resource('setting', 'SettingController');
});

