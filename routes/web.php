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
    return view('auth/login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::prefix('admin')->group(function() {
 Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
 Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
 Route::get('/', 'AdminController@index')->name('admin.dashboard');
 Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

// Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});


//Routes for Inserting into pilgrimr_info table
Route::prefix('')->group(function() {
  Route::get('pilgrim/pilgrimapp', 'pilgrimControllers\PilgrimApp@pilgrimapp')->middleware('pilgrim');
  Route::post('pilgrim/insert','pilgrimControllers\PilgrimInsertController@insert')->middleware('pilgrim');
  Route::get('pilgrim/pilgrimappsuccess/{sponsor_id}','pilgrimControllers\PilgrimApp@pilgrimappsuccess')->middleware('pilgrimappsuccess');
});


//Routes for Inserting into sponsor_info table
Route::prefix('')->group(function() {
  Route::get('sponsor/sponsorapp', 'sponsorControllers\SponsorApp@sponsorapp')->middleware('sponsor');
  Route::post('sponsor/insert','sponsorControllers\SponsorInsertController@insert')->middleware('sponsor');
  Route::get('sponsor/sponsorappsuccess','sponsorControllers\SponsorApp@sponsorappsuccess')->middleware('sponsorappsuccess');
});

//Routes for Inserting into pastor_info table
Route::prefix('')->group(function() {
  Route::get('pastor/pastorapp', 'pastorControllers\PastorApp@pastorapp')->middleware('pastor');
  Route::post('pastor/insert','pastorControllers\PastorInsertController@insert')->middleware('pastor');
  Route::get('pastor/pastorappsuccess','pastorControllers\PastorApp@pastorappsuccess')->middleware('pastorappsuccess');
  Route::get('pastor/dashboard','pastorControllers\PastorApp@pastordashboard')->middleware('pastorappsuccess');
});
