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

/*
 * We will be using Controllers for this build
 * I'm basically applying whatever we learnt today
 */

Route::get('/', [
    'as' => 'landing',
    'uses' => 'RouteController@renderLanding'
]);

Route::get('/login', [
    'as' => 'login',
    'uses' => 'RouteController@renderLogin'
]);

Route::get('/register', [
    'as' => 'register',
    'uses' => 'RouteController@renderRegister'
]);

Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'UserController@logout'
]);


/** POST */

Route::post('/login', [
    'as' => 'login.submit',
    'uses' => 'UserController@login'
]);

Route::post('/register', [
    'as' => 'register.submit',
    'uses' => 'UserController@register'
]);