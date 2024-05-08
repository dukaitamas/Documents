<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::get('/lego-sets', 'LegoSetController@index');
Route::get('/lego-sets/{id}', 'LegoSetController@show');
Route::post('/lego-sets', 'LegoSetController@store');
Route::put('/lego-sets/{id}', 'LegoSetController@update');
Route::delete('/lego-sets/{id}', 'LegoSetController@delete');
Route::get('/themes', 'ThemeController@index');
Route::get('/themes/{id}', 'ThemeController@show');
Route::post('/themes', 'ThemeController@store');
Route::put('/themes/{id}', 'ThemeController@update');
