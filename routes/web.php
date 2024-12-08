<?php

use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SearchPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomePageController::class, 'index' ]);
Route::get('/search', [SearchPageController::class, 'search_global']);
Route::get('/search/actu', [ SearchPageController::class, 'search_actu' ]);
Route::get('/search/finance', [ SearchPageController::class, 'search_finance' ]);
Route::get('/search/tech', [ SearchPageController::class, 'search_tech' ]);

# Gestion du commentaire
Route::post('/comment', [ CommentaireController::class, 'comment_post']);

# Gestion des cookies
Route::post('/cookie-management', [ CookieController::class, 'index_cookie' ]);

# Information
Route::get('/robots.txt', function () {
    return response()->view('robots')->header('Content-Type', 'text/plain');
});
Route::get("/sitemap.xml", function() {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
});