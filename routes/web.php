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
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('dashboard', function() {} );
});
Route::group(['prefix' => 'mssadmin'], function()
{
    Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login','Auth\LoginController@login');
    Route::post('/logout','Auth\LoginController@logout')->name('logout');
    Route::get('/password/confirm','Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('/password/confirm','Auth\ConfirmPasswordController@confirm');
    Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register','Auth\RegisterController@register');
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
