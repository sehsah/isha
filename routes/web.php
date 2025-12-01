<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/works', [PageController::class, 'projects'])->name('works');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/questionnaire', [PageController::class, 'questionnaire'])->name('questionnaire');
Route::post('/questionnaire', [PageController::class, 'submitQuestionnaire'])->name('questionnaire.submit');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/how-to', [PageController::class, 'howTo'])->name('how-to');
Route::get('/services', [PageController::class, 'services'])->name('services');