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

Route::get('/register',function(){

    return view('register');
});

Route::post('register', 'App\Http\Controllers\Register@store');

Route::get('/list', 'App\Http\Controllers\Register@list');


Route::get('/edituser/{id}/edit', 'App\Http\Controllers\Register@edit');

Route::Patch('/edituser/{id}/update', 'App\Http\Controllers\Register@update');

Route::get('/edituser/{id}/delete', 'App\Http\Controllers\Register@delete');

Route::resource('books', 'App\Http\Controllers\BooksController');

Route::get('/', 'App\Http\Controllers\StudentController@index');
Route::get('/edit/{id}', 'App\Http\Controllers\StudentController@edit');
Route::get('/show/{id}', 'App\Http\Controllers\StudentController@show');
Route::get('/create', 'App\Http\Controllers\StudentController@create');
Route::post('/store', 'App\Http\Controllers\StudentController@store');
Route::post('/update/{id}', 'App\Http\Controllers\StudentController@update');










//Route::get('/edit/{{$data->id}}', 'App\Http\Controllers\Register@edit');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
