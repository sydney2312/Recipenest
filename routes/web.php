<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\HomeController;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\WritingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthorDashboardController;
use App\Http\Controllers\ChefDashboardController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\RecipeDashboardController;
use App\Http\Controllers\WritingDashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route to show all recipes
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

// Route to show one writing
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

// Rooute to show all authors
Route::get('/chefs', [ChefController::class, 'index'])->name('chefs.index');

// Route to show author profile
Route::get('/chefs/{id}', [ChefController::class, 'show'])->name('chefs.show');

// Route to show author portfolio
Route::get('/chefs/{id}/portfolio', [ChefController::class, 'showPortfolio'])->name('chefs.portfolio.show');


// Route::get('/contact', [ContactUsController::class, 'showContactForm'])->name('contact.form');
Route::post('/contact/{id}', [ContactFormController::class, 'sendEmail'])->name('contact.send');





Route::prefix('authors')->middleware(['auth'])->name('authors.')->group(function () {
    // Routes to create, edit, update, remove recipes
    Route::resource('/recipes', RecipeDashboardController::class)->except([
        'show'
    ]);
    // Routes: /authors/recipes
    // Route names: authors.recipes.index
    ;

    // Route to get all recipes by authors following
    Route::get('/followings', [ChefDashboardController::class, 'followings'])->name('followings');

    // Routes to update author profile
    Route::resource('/profile', ChefDashboardController::class)->only([
        'edit', 'update'
    ]);
});






Route::middleware(['auth'])->group(function () {
    // Route::resource('reviews', ReviewController::class);

    // Route to follow author
    Route::get('/follow/{user}/{author}', [FollowController::class, 'follow'])->name('app.follow');

    // Route to unfollow author
    Route::get('/unfollow/{user}/{author}', [FollowController::class, 'unfollow'])->name('app.unfollow');
});



// Include the additional routes for prototype
require base_path('routes/prototype.php');
