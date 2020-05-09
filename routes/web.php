<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/store', function () {
    return view('store');
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth');

Route::resource('/admin/users', 'UserController')->middleware('auth');
Route::get('/admin/users/restore/{id}', 'UserController@restore')->name('users.restore')->middleware('auth');
Route::resource('/admin/addresses', 'AddressController')->middleware('auth');
Route::resource('/admin/roles', 'RoleController')->middleware('auth');
Route::resource('/admin/photos', 'PhotoController')->middleware('auth');
Route::resource('/admin/products', 'ProductController')->middleware('auth');
Route::resource('/admin/categories', 'CategoryController')->middleware('auth');
Route::get('/admin/categories/getChildCategories/{id}', 'CategoryController@getChildCategories')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
