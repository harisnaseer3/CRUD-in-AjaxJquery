<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TodoController;

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

Route::get('/', 'App\Http\Controllers\TodoController@index');
Route::get('todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit');
Route::post('todos/store', 'App\Http\Controllers\TodoController@store');
Route::delete('todos/destroy/{todo}', 'App\Http\Controllers\TodoController@destroy');
// Route::get('/', [TodoController::class,'index']);
// {
//     return view('welcome');
// }
