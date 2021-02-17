<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/messages', [MessageController::class, 'index'])->name('messages');
Route::post('/messages', [MessageController::class, 'store']);
