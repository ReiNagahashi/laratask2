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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::group(['middleware' => ['web']], function () {

// Auth
Route::get('/login',[
    'uses' => 'LoginController@loginForm',
    'as' => 'login'
]);
Route::post('/login',[
    'uses' => 'LoginController@login',
    'as' => 'loginSubmit'
]);

Route::get('/register',[
    'uses' => 'LoginController@registerForm',
    'as' => 'register'
]);
Route::post('/register',[
    'uses' => 'LoginController@register',
    'as' => 'registerSubmit'
]);

});
