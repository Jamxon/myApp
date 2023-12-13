<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TeacherController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('details', [SiteController::class, 'details']);
Route::get('404', [SiteController::class, 'notfound']);
Route::get('contact', [SiteController::class, 'contact']);
Route::resource('teachers', TeacherController::class);
