<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::auth();
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/tips','HomeController@tips');
    Route::get('/price_list','HomeController@price_list');
    Route::get('/dashboard','DashboardController@show');
    Route::get('/dashboard/recipients','DashboardController@show');
    Route::resource('/dashboard/recipients','RecipientsController');
//    Route::get('/dashboard/recipients/create','DashboardController@create');
//    Route::get('/dashboard/recipients/update','DashboardController@update');
//    Route::get('/dashboard/recipients', 'RecipientsController@show');
    Route::get('/dashboard/reset_password','DashboardController@showResetPasswordForm');
    Route::post('/dashboard/reset_password','DashboardController@resetPassword');
});


//Route::resource('users', 'UsersController');

