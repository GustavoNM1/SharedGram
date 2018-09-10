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

Auth::routes();


Route::group(['prefix', 'HomeController'], function(){
Route::get('home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['prefix', 'PagesController'], function(){
Route::get('gallery','PagesController@gallery')->name('gallery');
Route::get('profile','PagesController@profile')->name('profile');
Route::get('friends','PagesController@friends')->name('friends');
Route::get('favorites','PagesController@favorites')->name('favorites');
Route::get('recents','PagesController@recents')->name('recents');
Route::get('notice','PagesController@notice')->name('notice');
});