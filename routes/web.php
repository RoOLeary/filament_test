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

Route::get('/', 'App\Http\Controllers\PageController@index')->name('home');
Route::get('/snout', 'App\Http\Controllers\PageController@snout')->name('snout');
Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts');
Route::get('/posts/{slug}', 'App\Http\Controllers\PostController@show')->name('show');