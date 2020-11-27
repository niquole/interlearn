<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// USER ROUTES
Route::middleware('api')->get('/users', 'App\Http\Controllers\ApiUserController@index');

// LESSON ROUTES
Route::middleware('api')->get('/lessons', 'App\Http\Controllers\ApiLessonController@index'); //showing the view
Route::middleware('auth:api')->post('/lessons', 'App\Http\Controllers\ApiLessonController@store'); //storing the data

// QUIZ ROUTES
Route::middleware('api')->get('/quizzes', 'App\Http\Controllers\ApiQuizController@index'); //showing the view
Route::middleware('auth:api')->post('/quizzes', 'App\Http\Controllers\ApiQuizController@store'); //storing the data