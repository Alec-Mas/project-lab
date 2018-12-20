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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Public Routes
Route::get('/', 'LandingController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/post/retrieve/{id}', 'LandingController@show')->name('show.post');
Route::get('/contact', 'LandingController@contact')->name('contact');
Route::get('/projects', 'LandingController@projects')->name('projects');


# Content Routes [MUST BE LOGGED IN]
Route::group(['middleware' => 'auth'], function() {
    Route::get('/grab','HomeController@retrievePost');
    Route::get('/post/update','HomeController@updatePost');
    Route::post('/post/create','HomeController@createPost')->name('create.post');
    Route::get('/post/delete','HomeController@deletePost');

    Route::post('/hero/create','HomeController@createHero');
    Route::get('/hero/retrieve','HomeController@retrieveHero');
    Route::get('/hero/update','HomeController@updateHero');
    Route::get('/hero/delete','HomeController@deleteHero');

    Route::post('/document/create','HomeController@createDocument');
    Route::get('/document/update','HomeController@updateDocument');
    Route::get('/document/grab','HomeController@retrieveDocument');

});


