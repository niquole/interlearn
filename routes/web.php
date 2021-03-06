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


Auth::routes();
Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('/');
Route::get('/create', [App\Http\Controllers\CreateController::class, 'index'])->name('/create');
Route::get('/login-teacher', [App\Http\Controllers\LoginTeacherController::class, 'index'])->name('/login-teacher');


// QUIZ ROUTES
Route::get('/quizzes', [App\Http\Controllers\QuizController::class, 'index'])->name('/quizzes');
Route::get('/create-quiz', [App\Http\Controllers\CreateQuizController::class, 'index'])->name('/create-quiz');
Route::get('/quiz/{id}', [App\Http\Controllers\QuizController::class, 'show'])->name('quiz');

// LESSON ROUTES
Route::get('/lessons', [App\Http\Controllers\LessonController::class, 'index'])->name('/lessons');
Route::get('/create-lesson', [App\Http\Controllers\CreateLessonController::class, 'index'])->name('/create-lesson');
Route::get('/lesson/{id}', [App\Http\Controllers\LessonController::class, 'show'])->name('lesson');

