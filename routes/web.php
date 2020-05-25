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

/* Route oui */
/* Route::get('/oui', 'LevelController@oui'); */

/* Langues */
Route::get('/lang/en',  'LangController@english');
Route::get('/lang/fr',  'LangController@french');

/* Routes amis*/
Route::post('/search', 'UserController@search');
Route::get('/friends',  'UserController@frens');
Route::get('/add/{id}', 'FriendController@add');
Route::get('/accept/{id}', 'FriendController@accept');
Route::get('/refuse/{id}', 'FriendController@refuse');

/* Classement */
Route::get('/rankings',  'UserController@rankings');

/* Route profil */
Route::get('/profile/{id}',  'UserController@profile');

/* Routes quêtes */
Route::get('/quests',  'UserController@quests');
Route::get('/quest/create',  'QuestController@form');
Route::post('/quest/add',  'QuestController@add');
Route::get('/quest/accept/{id}', 'QuestController@accept');
Route::get('/quest/refuse/{id}', 'QuestController@refuse');
Route::get('/quest/complete/{id}', 'QuestController@complete');


Auth::routes();

