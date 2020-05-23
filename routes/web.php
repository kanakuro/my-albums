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
Route::get('/albumForShare', 'HomeController@index')->name('home');
Route::get('/albumForShare/{post}', 'HomeController@show')->where('post', '[0-9]+');
Route::get('/albumForShare/{post}/edit', 'HomeController@edit');
Route::patch('/albumForShare/{post}', 'HomeController@update');
Route::post('/albumForShare/post', 'HomeController@store');
Route::get('/albumForShare/create', 'HomeController@create')->name('create');
Route::get('/logout', 'HomeController@logout')->name('auth.logout');
Route::get('/register', 'Auth\RegisterController@index')->name('auth.register');
Route::post('/register', 'Auth\RegisterController@create');
Route::delete('/albumForShare/{post}', 'HomeController@destroy');
Route::post('/albumForShare/{post}/comment', 'CommentsController@store');
Route::delete('/albumForShare/{post}/comment/{comment}', 'CommentsController@destroy');
