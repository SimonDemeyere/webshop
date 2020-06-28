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
// fetching data
Route::get('/fetch-products/{categoryId}', 'ShopController@fetchProducts');

Route::middleware(['auth'])->group(function () {
    //Add to Cart
    Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
    Route::get('/remove-from-cart/{id}', 'ProductController@removeFromCart')->name('product.removeFromCart');
    Route::get('/checkout', 'ProductController@getCart')->name('product.checkout');
    Route::post('/checkout', 'ProductController@checkout')->name('checkout');
    //Add comment to product
    Route::post('/comment', 'commentController@store')->name('comment');

    //Admin Dashboard
    Route::get('/admin', 'DashboardController@index');

    //Admin Navigation Routes
    Route::resource('/admin/users', 'UserController');
    Route::get('/admin/users/restore/{id}', 'UserController@restore')->name('users.restore');
    Route::resource('/admin/addresses', 'AddressController');
    Route::resource('/admin/roles', 'RoleController');
    Route::resource('/admin/photos', 'PhotoController');
    Route::resource('/admin/products', 'ProductController');
    Route::resource('/admin/categories', 'CategoryController');
    //Create category
    Route::get('/admin/categories/getChildCategories/{id}', 'CategoryController@getChildCategories');
    //Attach category to product
    Route::get('/admin/categories/getChildByParentId/{id}', 'CategoryController@getChildByParentId');

    //Paypal
    Route::get('payment-status',array('as'=>'payment.status','uses'=>'PaymentController@paymentInfo'));
    Route::get('payment',array('as'=>'payment','uses'=>'PaymentController@payment'));
    Route::get('payment-cancel', function () {
        return 'Payment has been canceled';
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
