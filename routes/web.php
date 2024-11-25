<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SearchPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomePageController::class, 'index' ]);
Route::get('/search', [SearchPageController::class, 'search_global']);
// Route::get('/search/finance?q={query}', [ SearchPageController::class, 'search_finance' ]);
