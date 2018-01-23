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

Route::get('/', [
    'uses'=>'ProductController@getProducts',
    'as'=>'layouts.index'

]);

Route::get('product/{id}',[
    'uses'=>'ProductController@getProduct',
    'as'=>'ProductDetails.index'
    ]);

Route::get('user',function(){
   return view('layouts.user');
});

Route::get('deals',[
   'uses'=>'ProductController@getDeals',
    'as'=>'ProductDetails.deals'
]);

Route::get('electronicsProducts',[
   'uses'=>'ProductController@getElectronicsCategory',
   'as'=>'ProductDetails.electronicproducts'
]);

Route::post('electronicsProducts',[
   'uses'=>'ProductController@postElectronicsCategory',
    'as'=>'ProductDetails.electronicproducts'
]);

Route::get('clothingProducts',[
    'uses'=>'ProductController@getClothingCategory',
    'as'=>'ProductDetails.clothingproducts'
]);

Route::post('clothingProducts',[
   'uses'=>'ProductController@postClothingCategory',
   'as'=>'ProductDetails.clothingproducts'
]);
Route::get('books',[
    'uses'=>'ProductController@getBooksCategory',
    'as'=>'ProductDetails.bookproducts'
]);
Route::get('hkp',[
    'uses'=>'ProductController@getHKPCategory',
    'as'=>'ProductDetails.hkpproducts'
]);
Route::get('jewelry',[
    'uses'=>'ProductController@getJewelryCategory',
    'as'=>'ProductDetails.jewelryproducts'
]);
//cart just to get and not to post anything. It fetches the cart at the front
Route::get('getcart',[
   'uses'=>'CartController@getCart',
   'as'=>'checkout.getcart'
]);
Route::post('cart/{id}',[
   'uses'=>'CartController@postCart',
   'as'=>'checkout.cart'
]);
Route::get('updatedcart/{id}/{quantity}',[
   'uses'=>'CartController@updateCart',
   'as'=>'checkout.update'
]);

Route::post('paymentPage',[
   'uses'=>'AddressController@postAddress',
    'as'=>'checkout.getpayment',
]);

Route::get('address',[
   'uses'=>'AddressController@getAddressPage',
   'as'=>'checkout.address',
   'middleware'=>'auth'
]);

Route::post('orders',[
   'uses'=>'OrdersController@order',
   'as'=>'Orders.orders'
]);

Route::get('orders',[
    'uses'=>'OrdersController@getorders',
    'as'=>'Orders.orders'
]);

Route::get('user',[
   'uses'=>'UserController@getUser',
    'as'=>'layouts.user'
]);
Route::get('profile',[
   'uses'=>'UserController@getProfile',
    'as'=>'User.getprofile'
]);

Route::post('profileupdated',[
   'uses'=>'UserController@updateProfile',
    'as'=>'User.profile'
]);

Route::get('giftcards',[
   'uses'=>'UserController@getGiftcards',
    'as'=>'User.giftcards'
]);

Route::get('about',[
    'uses'=>'UserController@getAbout',
    'as'=>'help.about'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
