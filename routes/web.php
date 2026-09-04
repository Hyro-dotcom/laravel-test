<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index']);

Route::get('/hello/{name}', function ($name) {
    return "Hello, {$name}!";
});