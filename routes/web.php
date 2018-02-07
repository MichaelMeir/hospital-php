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

Route::get('/', 'HospitalController@index');
Route::get('/index', 'HospitalController@index');
Route::get('/patients', 'HospitalController@index');

Route::get('/clients', 'HospitalController@clients');

Route::get('/species', 'HospitalController@species');

//edit

Route::get('edit/species/{id}', 'EditController@species_view');
Route::post('edit/species/{id}', 'EditController@species');

Route::get('edit/clients/{id}', 'EditController@clients_view');
Route::post('edit/clients/{id}', 'EditController@clients');

Route::get('edit/patients/{id}', 'EditController@patients_view');
Route::post('edit/patients/{id}', 'EditController@patients');

//delete

Route::get('delete/patients/{id}', "DeleteController@patients");
Route::get('delete/clients/{id}', "DeleteController@clients");
Route::get('delete/species/{id}', "DeleteController@species");

//create

Route::get('create/species', "CreateController@species_view");
Route::get('create/clients', "CreateController@clients_view");
Route::get('create/patients', "CreateController@patients_view");


Route::post('create/species', "CreateController@species");
Route::post('create/clients', "CreateController@clients");
Route::post('create/patients', "CreateController@patients");

//sorting

Route::get('/{sort}/{sort_name}', 'HospitalController@index_sort');
Route::get('/index/{sort}/{sort_name}', 'HospitalController@index_sort');
Route::get('/patients/{sort}/{sort_name}', 'HospitalController@index_sort');

Route::get('/clients/{sort}/{sort_name}', 'HospitalController@clients_sort');

Route::get('/species/{sort}/{sort_name}', 'HospitalController@species_sort');