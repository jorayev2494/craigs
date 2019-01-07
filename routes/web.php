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

Route::get('/{uuid?}', ["uses" => "IndexController@index", "as" => "index"]);

Route::group(['prefix' => 'admin', "as" => "admin."], function () {
    // admin/menu_selects
    Route::resource('/menus', "Admin\MenuController", ["parameters" => ["dashboard" => "menu"]]);
    Route::resource('/menu_selectees', "Admin\MenuSelectController", ["parameters" => ["menu_selectees" => "select"]]);
    Route::resource('/dashboards', "Admin\DashboardController", ["parameters" => ["dashboard" => "slug"]]);
    Route::resource('/users', 'Admin\UserController');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
