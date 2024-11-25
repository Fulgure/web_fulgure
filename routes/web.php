<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SearchPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomePageController::class, 'index' ]);
Route::get('/search', [SearchPageController::class, 'search_global']);
Route::get('/search/actu', [ SearchPageController::class, 'search_actu' ]);
Route::get('/search/finance', [ SearchPageController::class, 'search_finance' ]);
Route::get('/search/tech', [ SearchPageController::class, 'search_tech' ]);