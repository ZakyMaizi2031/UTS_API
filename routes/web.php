<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Api\GameNewsController;

Route::get('/api/announcements', [GameNewsController::class, 'showAnnouncements']);
Route::get('/announcements', [GameNewsController::class, 'getAnnouncements']);
