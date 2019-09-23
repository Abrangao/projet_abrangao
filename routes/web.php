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

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/about',  [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/contact',  [
    'as' => 'contact_path',
    'uses' => 'ContactsController@create'
]);
Route::post('/contact',  [
    'as' => 'contact_path',
    'uses' => 'ContactsController@store'
]);

Route::get('/utilisateurs', 'UtilisateursController@liste');
Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

 //Route::get('/home', 'HomeController@index')->name('home');
