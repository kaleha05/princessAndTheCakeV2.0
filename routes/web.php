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
    return view('home');
});

Route::get('/blog', [\App\Http\Controllers\RecipesController::class, 'index']);

Route::get('/prices', function () {
    return view('prices');
});

Route::get('/reviews', [\App\Http\Controllers\CommentController::class, 'show']);

Route::get('/classes', function () {
    return view('classes');
});

Route::get('/blog/{blogPost}', [\App\Http\Controllers\RecipesController::class, 'show']);

Route::get('/contacts', function () {
    return view('contacts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/save',[\App\Http\Controllers\CommentController::class, 'store']);

Route::get('/portfolio', [\App\Http\Controllers\ImagesController::class, 'index']);

