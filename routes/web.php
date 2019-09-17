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

Route::get('/utilisateurs', 'UtilisateursController@liste');
Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');
// Route::get('/inscription', function(){
// 	return view('pages.inscription');
// });
// Route::post('/inscription', function(){
// 		request()->validate([
//             'email' => ['required', 'email'],
//             'password' => ['required', 'confirmed', 'min:8'],
//             'password_confirmation' => ['required'],
//         ], [
//             'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
//         ]);

//         $utilisateur = User::create([
//             'email' => request('email'),
//             'mot_de_passe' => bcrypt(request('password')),
//         ]);

//         return "Nous avons reçu votre email qui est " . request('email') . ' et votre mot de passe est ' . request('password');
// });
