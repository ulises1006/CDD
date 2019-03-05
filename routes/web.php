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



Route::group(['middleware'=>['web']], function (){
    Route::resource('/payment', 'PagoController');
});

Route::get('/pdf-receta/{recipe}', 'RecipeController@crearPdf')->name('imprimir');

Route::get('/pdf-historia/{history}/{patient}', 'HistoryController@historiaClinica')->name('imprimir_historia');;

Route::group(['middleware'=>['web']], function (){
    Route::resource('/appointment', 'AppointmentController');
    Route::put('/appointment', 'AppointmentController@editar')->name('appointment.editar');
    Route::get('appointment/{appointment}', 'AppointmentController@actualizar')->name('appointment.actualizar');
    Route::get('/payment/patient/{id}','PagoController@indexPatient')->name('payment.indexPatient');
    Route::resource('/recipe', 'RecipeController');
    Route::post('/payment/redirect','PagoController@mandar')->name('payment.mandar');
    Route::resource('/treatment', 'TreatmentController');
    Route::get('/treatment/patient/{id}','TreatmentController@indexPatient')->name('treatment.indexPatient');
    Route::delete('/treatment/patient/{treatment}/{id}','TreatmentController@destroyTreatment')->name('treatment.destroyTreatment');
});


