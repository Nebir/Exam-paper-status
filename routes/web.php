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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Admin Options */
Route::get('dashboard',['as' => 'dashboard', 'uses' => 'AdminController@index'])->middleware('CheckAdmin:Admin');


// Login Routes...
/*$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login/custom',['as'=>'login.custom','uses'=>'LoginController@login']);
$this->post('logout', 'Auth\LoginController@logout')->name('logout');*/

// Registration Routes...
/*$this->get('register', 'LoginController@showRegistrationForm')->name('register')->middleware('CheckAdmin:Admin');
$this->post('register', 'LoginController@register')->middleware('CheckAdmin:Admin');*/

// Password Reset Routes...
/*$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');*/