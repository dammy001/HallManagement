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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HallController@about')->name('about');
Route::get('/contact', 'HallController@contact')->name('contact');
Route::get('/details', 'HallController@details')->name('details');

//Vendor Login and Register
Route::get('/register', 'AdminController@register')->name('register');
Route::post('/register', 'AdminController@store')->name('register.store');

Route::get('/login', 'AdminController@index')->name('login');
Route::post('/login', 'AdminController@login')->name('admin.login');

Route::get('/logout', 'AdminController@logout')->name('logout');

//Halls and Details
Route::get('/listing', 'HallController@listing')->name('listing');
Route::get('/details/{id}', 'HallController@show')->name('details.show');

Route::get('/{eventtype}', 'EventTypeController@show')->name('eventtypes');

//Booking
Route::post('/booking', 'BookingController@store')->name('booking.store');

//search
Route::any('/search', 'HallController@search')->name('hall.search');
Route::post('/filter', 'HallController@filter')->name('filter');

//Admin
Route::prefix('admin')->group(function(){

    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

    //Manage Hall
    Route::get('/upload', 'HallController@create')->name('upload');
    Route::post('/upload', 'HallController@store')->name('uploadhall.submit');
    Route::get('/manage', 'HallController@index')->name('manage');

    Route::get('/update', 'HallController@update')->name('uploadhall.update');

    Route::get('/booking', 'BookingController@index')->name('booking');
    Route::get('/{id}', 'HallController@edit')->name('edit');
    Route::get('/delete/{id}', 'HallController@destroy')->name('delete');
});

