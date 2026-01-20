<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notification', [NotificationController::class, 'index']);
Route::get('notification/{type}', [NotificationController::class, 'notification'])->name("notification");