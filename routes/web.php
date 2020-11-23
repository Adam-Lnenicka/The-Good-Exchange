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

Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/create', 'UserController@create');

Route::get('/helpmate', 'UserController@helpmate');
Route::get('/helpmate_food', 'UserController@helpmate_food');
Route::get('/helpmate_handy', 'UserController@helpmate_handy');
Route::get('/helpmate_medicine', 'UserController@helpmate_medicine');

Route::get('/hopeful', 'UserController@hopeful');

Route::get('/hopeful_food', 'UserController@hopeful_food');
Route::get('/hopeful_handy', 'UserController@hopeful_handy');
Route::get('/hopeful_medicine', 'UserController@hopeful_medicine');


Route::post('/users', 'UserController@store');// not sure what this does 
Route::get('/users/{id}', 'UserController@show')->name('profile');


Route::get('/users/{id}/edit', 'UserController@edit');
Route::put('/users/{id}', 'UserController@update');
Route::get('/users/{id}/delete', 'UserController@delete'); // will show message "really want to delete?
Route::delete('/users/{id}', 'UserController@destroy');

Route::get('/post/{post_id}/message', 'MessageController@index')->name('Allmessages');
Route::get('/post/{post_id}/mymessages', 'MessageController@indexx', ['user_id'])->name('Authmessages');
// Route::get('/message', 'MessageController@index')->name('messages');
Route::post('/post/{post_id}/message', 'MessageController@store');
Route::get('/home-redirect', function(){return redirect()->action('UserController@edit', Auth::id());});


Route::get('/newpost','UserPostController@create')->name('newpost');
Route::post('/newpost','UserPostController@store');
Route::get('/Helpmates','UserPostController@helpmates')->name('filter-helpmate');


//-------React Application --------------------

Route::get('/post','UserPostController@create')->name('post');



Route::get('/api','UserPostController@api');