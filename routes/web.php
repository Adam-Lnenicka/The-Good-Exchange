<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



//----------------------------------------------------------------------

//Route::get('dashboard','UserPostController@index');
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

Route::get('/myposts/{id}', 'UserController@mypost', ['id'])->name('myposts'); //display user posts 
Route::get('/users/{id}/edit', 'UserController@edit');//edit user with specfic id
Route::put('/users/{id}', 'UserController@update'); //update user
Route::get('/users/{id}/delete', 'UserController@delete'); // display deletion form will show message "really want to delete?
Route::delete('/users/{id}', 'UserController@destroy');// deletes user

Route::get('/{post_id}/message', 'MessageController@index')->name('messages'); //display messages linked to a post
Route::post('/post/{post_id}/message', 'MessageController@store'); // save that message with the post id 

Route::get('/post/{post_id}/message', 'MessageController@indexx')->name('Allmessages'); //display all messages connected to a post
Route::get('/post/{post_id}/Mymessages', 'MessageController@indexx')->name('SingleUserMsgs');

Route::get('/profile', function(){return redirect()->action('UserController@edit', Auth::id());})->name('fingersCrossed');//sends user to profile page 
Route::get('email', 'UserContoller@email')->name('forty');

Route::get('sendMessage/{id}', 'MessageContoller@create');

Route::get('/newpost','UserPostController@create')->name('newpost'); //display form for new page 
Route::post('/newpost','UserPostController@store'); //adds new post to database
Route::get('/Helpmates','UserPostController@helpmates')->name('filter-helpmate');

Route::get('/post/{post_id}/mymessages', 'MessageController@indexx', ['user_id'])->name('Authmessages');

Route::get('sendMail','MailController@index');


//-------React Application --------------------

Route::get('/post','UserPostController@create')->name('post');

//------------------------------------------------

Route::get('/api','UserPostController@api');
Route::get('/api/users','UserApiController@search');