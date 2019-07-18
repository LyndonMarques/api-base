<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', 'UserController@register');
Route::post('auth', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
  Route::get('user', 'UserController@getAuthenticatedUser');
  Route::get('categories', 'QuotationController@categories');
  Route::post('quotations', 'QuotationController@store');
  Route::post('contacts', 'ContactController@store');
});
