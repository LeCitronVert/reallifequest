<?php

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
/* home */
Route::get('/', 'FilController@home');

/* Routes amis*/
Route::post('/search', 'UserController@search');
Route::get('/friends',  'UserController@frens');
Route::get('/add/{id}', 'FriendController@add');
Route::get('/accept/{id}', 'FriendController@accept');
Route::get('/refuse/{id}', 'FriendController@refuse');


Auth::routes();

