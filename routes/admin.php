<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome')->middleware('auth');
