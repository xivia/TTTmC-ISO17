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

<<<<<<< HEAD
Route::get('/rankings', 'RankingsController@index')->name('rankings');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/editProfile', 'EditProfileController@index')->name('editProfile');
>>>>>>> 843281e3632c1e354216c24b63d94eff4ecd08f6

Auth::routes();

Route::post('/editProfile', 'EditProfileController@edit')->name('edit');


Route::get('/home', 'HomeController@index')->name('home');
