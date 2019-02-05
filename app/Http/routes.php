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
    return view('welcome');
});

Route::get('/about', function () {
    return "hi i'm Hesham Mostafa";
});
Route::get('/contact', function () {
    return "01120984441";
});

Route::get('/post/{id}/{name}', function ($id,$name) {
    return "this is id = ".$id."the name =".$name;
});