<?php

use App\Http\Controllers\backend\QuestionController;
use App\Http\Controllers\frontend\QuestionController as FrontendQuestionController;
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

Route::prefix('admin')->group(function () {
    Route::resource('questions', QuestionController::class);
});


Route::get('/',[FrontendQuestionController::class,'index']);
Route::post('/get-answer',[FrontendQuestionController::class,'getAnswer'])->name('get-answer');
