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

//Admin Book View Page.
Route::get('adminbooks','BooksController@adminbooks');
//NEW BOOk DATA  -- for STORE NEW Book INFO BY ADMIN.
Route::post('/newbook','BooksController@storeNewBook');
//Book DELETE.
Route::post('/bookdelete','BooksController@bookdelete');

//Book  UPDATE data
Route::post('/bookupdate','BooksController@bookUpdate');


//USER Book View Page.
Route::get('userbooks','BooksController@userbooks');


//BUY Book.
Route::post('buybook','BuyBookController@storeBookAfterBuy');

//USER VIEW BookS AFTER BUY View Page.
Route::get('buydbooks','BuyBookController@viewBooksAfterBuy');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
