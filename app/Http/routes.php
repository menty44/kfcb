<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::resource('classification', 'ClassificationController');
    Route::get('classification/invoice/{id}', 'ClassificationController@invoice');
    Route::get('classification/paid/{id}', 'ClassificationController@paid');
    Route::get('distributor/paid/{id}', 'DistributorController@paid');
    Route::get('distributor/invoice/{id}', 'DistributorController@invoice');
    Route::get('exhibition/invoice/{id}', 'ExhibitionController@invoice');
    Route::resource('distributor', 'DistributorController');
    Route::resource('mail', 'MailController');
    Route::resource('exhibition', 'ExhibitionController');
    Route::resource('invoice', 'InvoiceController');
    Route::resource('agent', 'AgentController');
    Route::resource('myapplications', 'MyapplicationsController');

});
