<?php

use Illuminate\Support\Facades\Route;

Route::get('/home/admin', [App\Http\Controllers\HomeController::class, 'admin'])
    ->name('home.admin')->middleware('is_admin');
