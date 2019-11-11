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


Route::get('/log', 'previousGamesController@index')->name('previousGames');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/profile', 'ProfilController@index')->name('profile');

Auth::routes();

Route::get('/rankings', 'RankingsController@index')->name('rankings');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/editProfile', 'EditProfileController@index')->name('editProfile');

Auth::routes();

Route::get('/searchProfiles', 'SearchProfilesController@index')->name('searchProfiles');

Auth::routes();

Route::post('/editProfile', 'EditProfileController@edit')->name('edit');

Auth::routes();

Route::post('/searchProfiles', 'SearchProfilesController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
