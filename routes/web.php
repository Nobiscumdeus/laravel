<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuizController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    //Adding our HomeController view 
    Route::get('/quiz/home',[HomeController::class,'index'])->name('home');

    Route::get('/home',function(){
        return Inertia('Home');
    });
    Route::get('/questions',function(){
        return Inertia('Questions');
    });
    Route::get('/questions',[QuestionController::class,'index'])->name('questions');

    Route::post('/questions',[QuestionController::class,'store']);

    Route::put('/questions',[QuestionController::class,'update']);

    Route::delete('/questions/{question}',[QuestionController::class,'destroy']);
    Route::put('/answers',[AnswerController::class,'update']);

    Route::get('/quiz',[QuizController::class,'index']);

    Route::post('/results',[QuizController::class,'results']);

    Route::fallback(function(){
        return Inertia::render('Dashboard');
    });


});
