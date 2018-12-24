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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return "Hello this is my first laravel app";
});
Route::get('/data/{id}/{name}', function ($id,$name) {
    return "sending date by route " . $id ." " . $name;
});
Route::resource('post','PostController');

Route::get('/contact/{id}', 'PostController@contact');
Route::get('/post/{id}', 'PostController@show_post');


  