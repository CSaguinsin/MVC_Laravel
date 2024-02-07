<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ DashboardController::class , 'index' ] );

Route::get('/feed', [ FeedController::class , 'index' ] );
