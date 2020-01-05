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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', 'Auth\LoginController@index')->name('auth.login');
Route::post('/login', 'Auth\LoginController@postLogin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{post_id}', 'HomeController@show')->name('show');
Route::post('/post', 'HomeController@store');
Route::get('/posts/create', 'HomeController@create');
Route::get('/logout', 'HomeController@logout')->name('auth.logout');
Route::get('/register', 'Auth\RegisterController@index')->name('auth.register');
Route::post('/register', 'Auth\RegisterController@create');
