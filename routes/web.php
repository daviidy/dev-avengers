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
    return view('bienvenue');
})->name('welcome');

Auth::routes();

Route::resource('users', 'UserController');
Route::resource('meetups', 'MeetupController');
Route::resource('projects', 'ProjectController');
Route::resource('multimedias', 'MultimediaController');
Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/seeJobs', 'UserController@seeJobs');
Route::get('/jobs/{job}', 'UserController@jobs');
Route::get('/seeVillages', 'UserController@seeVillages');
Route::get('/villages/{village}', 'UserController@villages');
Route::get('/seeCountries', 'UserController@seeCountries');
Route::get('/downloadInfos', 'UserController@downloadInfos');
Route::get('/registerEvent/{meetup}', 'MeetupController@registerEvent');
Route::post('/addCountries', 'UserController@addCountries');
Route::post('/addVillage', 'UserController@addVillage');


Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');


//ajax routes
Route::post('/uploadAvatar', 'UserController@uploadAvatar');
