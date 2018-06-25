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

// ユーザー登録
Route::get('signup', 'SignupController@index')->name('signup.index');

Route::post('signup', 'SignupController@postIndex');

Route::get('signup/confirm', 'SignupController@confirm')->name('signup.confirm');

Route::post('signup/confirm', 'SignupController@postConfirm');

Route::get('signup/thanks', 'SignupController@thanks')->name('signup.thanks');

Route::middleware('guest:admin')->group(function() {
    Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Admin\LoginController@login');
});

Route::middleware('auth:admin')->group(function() {
    Route::get('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('admin', 'Admin\LoginController@index')->name('admin.top');
});

\URL::forceScheme('https');
