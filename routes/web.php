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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');


Route::post('/users', 'UserController@store');
Route::get('/users/{id}', 'UserController@show')->name('profile');


Route::get('/users/{id}/edit', 'UserController@edit');
Route::put('/users/{id}', 'UserController@update');
Route::get('/users/{id}/delete', 'UserController@delete'); // will show message "really want to delete?
Route::delete('/users/{id}', 'UserController@destroy');

Route::post('/register', 'Auth\RegisterController@store')->middleware(['guest']);


Route::get('/message', 'MessageController@index');
Route::post('/message', 'MessageController@store');