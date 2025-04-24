<?php

use App\Http\Controllers\ChefController;
use App\Http\Controllers\ChefDashboardController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RecipeDashboardController;

// Home + prototype routes
Route::get('/prototype', [HomeController::class, 'index'])->name('prototype.home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Recipes
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

//  Chefs routes (ONLY controller-based)

Route::get('/chefs', [ChefController::class, 'index'])->name('chefs.index');
Route::get('/chefs/{id}', [ChefController::class, 'showProfile'])->name('chef.profile');
Route::get('/chefs/{id}/portfolio', [ChefController::class, 'showPortfolio'])->name('chefs.portfolio.show');

// Contact form
Route::post('/contact/{id}', [ContactFormController::class, 'sendEmail'])->name('contact.send');

// Author dashboard (requires auth)
Route::prefix('authors')->middleware(['auth'])->name('authors.')->group(function () {
    Route::resource('/recipes', RecipeDashboardController::class)->except(['show']);
    Route::get('/followings', [ChefDashboardController::class, 'followings'])->name('followings');
    Route::resource('/profile', ChefDashboardController::class)->only(['edit', 'update']);



    Route::prefix('authors')->middleware(['auth'])->name('authors.')->group(function () {
        Route::get('/profile/{profile}/edit', [ChefDashboardController::class, 'edit'])->name('profile.edit');
        Route::put('/profile/{profile}/update', [ChefDashboardController::class, 'update'])->name('profile.update');
    });



});

// Following system
Route::middleware(['auth'])->group(function () {
    Route::get('/follow/{user}/{author}', [FollowController::class, 'follow'])->name('app.follow');
    Route::get('/unfollow/{user}/{author}', [FollowController::class, 'unfollow'])->name('app.unfollow');
});

// Include prototype routes
require base_path('routes/prototype.php');
