<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;

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

Route::get('/', [QuestionController::class, 'create']);
Route::post('/question', [QuestionController::class, 'store']);

Route::get('/question/details/{id}', [AnswerController::class, 'create']);
Route::post('/answer', [AnswerController::class, 'store']);
