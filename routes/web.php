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

Route::group(['middleware'=>['web']], function (){
    Route::resource('/payment', 'PagoController');
});

Route::get('/pdf-receta', 'RecipeController@crearPdf');

Route::get('/pdf-historia', 'HistoryController@historiaClinica');

Route::group(['middleware'=>['web']], function (){
    Route::resource('/appointment', 'AppointmentController');
    Route::put('/appointment', 'AppointmentController@editar')->name('appointment.editar');
    Route::get('appointment/{appointment}', 'AppointmentController@actualizar')->name('appointment.actualizar');
});

Route::resource('/recipe', 'RecipeController');
