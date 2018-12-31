<?php

use App\Repository\Repository;

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

Route::get('/{uuid}', ["uses" => "IndexController@index", "as" => "index"]);


Route::get('/admin/dashboard', ["uses" => "Admin\AdminController@index", "as" => "admin.dashboard"]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
