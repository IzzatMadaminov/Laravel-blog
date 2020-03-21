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
//Home page
Route::get('/', 'SiteController@home')->name('home');
//Contact page
Route::get('/contact', 'SiteController@contact')->name('contact');
//About us page
Route::get('/about', 'SiteController@about')->name('about');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
