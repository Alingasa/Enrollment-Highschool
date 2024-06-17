<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentformController;

Route::get('/', function () {
    return view('webpage');
});

Route::get('/', [FrontendController::class, 'index']);
Route::get('/Enroll',[StudentController::class,'welcome']);
// Route::get('/', fybc)
Route::resource('/students', StudentController::class);
Route::post('/updatestudent',[StudentController::class,'updatestudent']);

Route::get('/profile/{hash}', [ProfileController::class, 'show'])->name('profile.show');

// Route::post('/student', [StudentformController::class, 'createstudent']);
