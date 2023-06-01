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

Route::get('/post', 'App\Http\Controllers\PostController@index');
Route::get('/post/create', 'App\Http\Controllers\PostController@create');
Route::get('/post/update', 'App\Http\Controllers\PostController@update');
Route::get('/post/delete', 'App\Http\Controllers\PostController@delete');
