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

Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'welcomeController@index')->name('index');

Route::get('/evenement', 'welcomeController@event')->name('event');

Route::get('/a-propos', 'welcomeController@about')->name('about');

Route::get('/contact', 'welcomeController@contact')->name('contact');

Route::post('/send', 'welcomeController@sendMessage')->name('sendMessage');

Route::post('/news-letter', 'welcomeController@newsLetter')->name('newsLetter');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
