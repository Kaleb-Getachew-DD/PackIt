<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

Route::post('/generate-package', [PackageController::class, 'generate']);
