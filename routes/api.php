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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('api')->get('/users', 'App\Http\Controllers\ApiUserController@index');
Route::middleware('api')->get('/quizzes', 'App\Http\Controllers\ApiQuizController@index');
Route::middleware('api')->get('/lessons', 'App\Http\Controllers\ApiLessonController@index');
// Route::middleware('auth:api')->post('/quizzes', 'App\Http\Controllers\ApiQuizController@store');


