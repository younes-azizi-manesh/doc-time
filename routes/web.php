<?php

use App\Http\Controllers\Web\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [DashboardController::class, 'index']);
