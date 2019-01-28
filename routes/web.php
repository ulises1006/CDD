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


Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/patient', 'PatientController');

Route::get('/history/ver/{id}','ViewController@ver')->name('history.ver');

Route::resource('history', 'HistoryController');

Route::resource('/treatment', 'TreatmentController');

Route::resource('/payment', 'PaymentController');

Route::resource('/appointment', 'AppointmentController');

Route::resource('/recipe', 'RecipeController');
