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
    return view('index');
});

Route::resource('user','UserController');
Route::get('/login', 'LoginController@login')->name('login');
Auth::routes();

//menu de opciones index
Route::get('menu',[
			'uses' => 'UserController@menu',
			'as'   => 'user.menu'
]);
Route::get('/home', 'HomeController@index')->name('home');
