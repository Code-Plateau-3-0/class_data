<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ------------------- home route ------------------
Route::get('/', 'ClassDataController@home');


// ------------------- create route ------------------
Route::get('/create', 'ClassDataController@create');

// ------------------- show route ------------------
Route::get('/show', 'ClassDataController@show');
Route::post('/store', 'ClassDataController@store');

// ----------------- DELETE ROUTE --------------------
Route::get('data/{id}/delete', 'ClassDataController@delete');

// ------------------- EDIT route ------------------
Route::get('data/{id}/edit', 'ClassDataController@edit');


// ------------------- UPDATE ROUTE -----------------------
Route::put('data/{id}/update', 'ClassDataController@update');