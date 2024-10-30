<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

// Route for generating packages
Route::post('/generate-package', [PackageController::class, 'generate']);
