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


Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Auth::routes(['verify' => true]);

Route::resource('courses', 'CoursesController');
Route::resource('applications', 'ApplicationsController');
Route::resource('customers', 'CustomersController');

Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/professional', 'HomeController@professional')->name('professional');
Route::get('/career', 'HomeController@career')->name('career');
Route::get('/others', 'HomeController@others')->name('others');

Route::get('/orders', 'CustomersController@orders')->name('orders');
Route::get('/activitystream', 'CustomersController@activitystream')->name('activitystream');
Route::get('/wallet', 'CustomersController@wallet')->name('wallet');
Route::get('/wishlist', 'CustomersController@wishlist')->name('wishlist');