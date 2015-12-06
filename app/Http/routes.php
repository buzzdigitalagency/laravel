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

Route::get('/', function () {
    return view('site.home');
});

/*
|-----------------
| Documentation
|-----------------
|
*/

Route::get('/docs', function() {
    return view('site.docs');
});

/*
|-----------
| Contact
|-----------
|
*/

Route::get('/contact', [
    'as'    => 'contact.get',
    'uses'  => 'ContactController@show'
]);

Route::post('/contact', [
    'as'    => 'contact.post',
    'uses'  => 'ContactController@contact'
]);