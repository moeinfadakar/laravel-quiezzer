<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\testController;
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

Route::get('/', [\App\Http\Controllers\Controller::class, "index"]);
Route::get('/panel', [\App\Http\Controllers\addnewController::class, "addNew"]);
Route::get('/Result', [\App\Http\Controllers\ResultController::class, "result"]);
Route::get("/test/{id}" , [testController::class, "words"]);
Route::get('/send', [\App\Http\Controllers\testController::class, "check"]);
Route::get('/process' , [testController::class, "enter"]);
Route::get('/startAddAnswer' ,[\App\Http\Controllers\addAnswersController::class, "addAnswer"]);
Route::get('/addAnswers', [testController::class, "addAnswersprocess"]);
Route::get('/addCorrectAnswer' , [\App\Http\Controllers\addCorrebtController::class , "addBtn"]);
Route::get('/lastProcess' , [\App\Http\Controllers\moeinController::class, "pro"]);
