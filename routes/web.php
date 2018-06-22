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

Route::get('/', 'PagesController@root')->name('root'); //主页路由

Auth::routes(); //用户认证路由

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);