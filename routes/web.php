<?php

use Illuminate\Support\Facades\Route;


require 'admin.php';

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

Auth::routes();



Route::view('/home', 'site.pages.homepage');
Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');
Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');

Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
});

Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');
Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');


Route::get('contacto/formulario', 'ContactController@formulario')->name('formulario');
Route::resource('admin/contacto', 'ContactController')->names('admin.contacto');


Route::get('usuario/terminos', 'ContactController@terminos')->name('terminos');
Route::get('usuario/nosotros', 'ContactController@nosotros')->name('nosotros');
Route::get('usuario/negocio', 'ContactController@negocio')->name('negocio');
