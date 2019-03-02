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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/uniq', 'PagesController@uniq');
Route::get('/manager', 'PagesController@manager');
Route::get('/admission', 'PagesController@admission');
Route::get('/trainProgs', 'PagesController@trainProgs');
Route::get('/professinal', 'PagesController@professinal');
Route::get('/trianDelivery', 'PagesController@trianDelivery');
Route::get('/contact', 'PagesController@contact');
Route::get('/board_Dir', 'PagesController@board_Dir');
Route::get('/register', 'PagesController@register');

