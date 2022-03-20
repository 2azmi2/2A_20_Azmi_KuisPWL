<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebAzmiController;
use App\Http\Controllers\WebAzmiBioController;
use App\Http\Controllers\WebAzmiCommentController;

Route::get('/', [WebAzmiController::class,'home']);

Route::get('/biodata', [WebAzmiBioController::class,'profile']);

Route::get('/komentar', [WebAzmiCommentController::class,'advice']);
