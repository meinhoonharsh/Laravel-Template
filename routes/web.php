<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LinkedinController;
use App\Http\Controllers\GithubController;



// Student Routes
Route::get('/',[HomeController::class,'index']);


// Teacher Routes
Route::get('/teacher',[TeacherController::class,'index']);






// Social Authentication Routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
Route::get('auth/linkedin', [LinkedinController::class, 'linkedinRedirect'])->name('redirectToLinkedin');
Route::get('auth/linkedin/callback', [LinkedinController::class, 'linkedinCallback']);
Route::get('auth/github', [GitHubController::class, 'gitRedirect'])->name('redirectToGithub');
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);