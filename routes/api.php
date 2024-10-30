<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

// Route for generating packages
Route::get('/generate-packages', [PackageController::class, 'generate']);
