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

use App\User;

/* Route de la landing page */
Route::get('/', 'WelcomeController@index');

/* Routes pour tous */

Route::get('/equipage', 'JeuneController@equipage');

Route::get('/equipage', 'EquipageController@index');
Route::get('/equipage/create', 'EquipageController@create');
Route::post('/equipage', 'EquipageController@store');
Route::get('/equipage/{equipage}', 'EquipageController@show');
Route::get('/equipage/{id}/edit', 'EquipageController@edit');
Route::put('/equipage/{id}', 'EquipageController@update');

Route::get('/listeJeune', function(){
    $jeunes = User::all();
    return view('/listeJeune', compact('jeunes'));
});
Route::get('chef/listeChef', 'ChefController@liste');

/* Routes des chefs */
Route::get('chef/login', 'Chef\AuthController@showLoginForm');
Route::post('chef/login', 'Chef\AuthController@login');

Route::group(['middleware' => ['chef']], function () {
    Route::get('chef/logout', 'Chef\AuthController@logout');
    Route::get('chef/home', 'ChefController@index');
    Route::get('chef/info_unite', 'ChefController@infoUnite');

});

/* Routes pour le users*/
Route::auth();

Route::get('/home', 'HomeController@index');


