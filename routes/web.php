<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/product/{id}', 'ProductController@show')->name('shop.product');
Route::post('/comment', 'commentController@store')->name('comment');
Route::resource('/checkout', 'CartController');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'DashboardController@index');

    Route::resource('/admin/users', 'UserController');
    Route::get('/admin/users/restore/{id}', 'UserController@restore')->name('users.restore');
    Route::resource('/admin/addresses', 'AddressController');
    Route::resource('/admin/roles', 'RoleController');
    Route::resource('/admin/photos', 'PhotoController');
    Route::resource('/admin/products', 'ProductController');
    Route::resource('/admin/categories', 'CategoryController');
    Route::get('/admin/categories/getChildCategories/{id}', 'CategoryController@getChildCategories');
    Route::get('/admin/categories/getChildByParentId/{id}', 'CategoryController@getChildByParentId');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
