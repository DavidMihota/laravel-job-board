<?php

use App\Http\Controllers\JobListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => to_route('jobs.index'));

Route::resource('jobs', JobListingController::class)
    ->only(['index', 'show']);
