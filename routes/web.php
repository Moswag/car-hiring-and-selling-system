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

Route::get('/', 'UserController@index')->name('index');
Route::get('/logout', 'UserController@logout')->name('logout');
Route::get('/register_client', 'UserController@registerAsClient')->name('register_client');
Route::get('/register_company', 'UserController@registerAsCompany')->name('register_company');
Route::post('/signin', 'UserController@login')->name('signin');
Route::post('/signup_client', 'UserController@registerClient')->name('signup_client');
Route::post('/signup_company', 'UserController@saveCompany')->name('signup_company');


Route::group(['namespace' => 'Admin','middleware'=>'auth'],function () {
    Route::get('/add_admin', 'AdminController@addAdmin')->name('add_admin');
    Route::get('/view_admins', 'AdminController@viewAdmins')->name('view_admins');
    Route::post('/save_admin', 'AdminController@saveAdmin')->name('save_admin');

    Route::get('/add_company', 'CompanyController@addCompany')->name('add_company');
    Route::post('/save_company', 'CompanyController@saveCompany')->name('save_company');
    Route::get('/view_companies', 'CompanyController@viewCompanies')->name('view_companies');


    Route::get('/add_token', 'TokenController@addToken')->name('add_token');
    Route::post('/save_token', 'TokenController@saveToken')->name('save_token');
    Route::get('/view_tokens', 'TokenController@viewTokens')->name('view_tokens');
});

Route::group(['namespace' => 'Company','middleware'=>'auth'],function () {
    Route::get('/add_car', 'CarController@addCar')->name('add_car');
    Route::get('/view_cars', 'CarController@viewCars')->name('view_cars');
    Route::post('/save_car', 'CarController@saveAdmin')->name('save_car');

    Route::get('/add_hiring', 'CarController@addCar')->name('add_hiring');
    Route::get('/add_booking', 'CarController@addCar')->name('add_booking');
    Route::get('/view_bookings', 'CarController@addCar')->name('view_bookings');
    Route::get('/view_hirings', 'CarController@viewCars')->name('view_hirings');
    Route::post('/save_hirings', 'CarController@saveAdmin')->name('save_hirings');




});