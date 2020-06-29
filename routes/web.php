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

Route::get('/','IndexController@show');
Route::get('/author','AuthorController@form');
Route::get('/author/add','AuthorController@addAuthor');
Route::post('/user/profile','SettingsController@profile')->name('profile');
Route::get('/user/account','SettingsController@account');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function (){
    return view('index');
} )->name('home');
