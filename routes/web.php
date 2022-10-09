<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include 'admin.php';

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/{slug}', [\App\Http\Controllers\Landing\LandingController::class, 'index'])->name('landing.show');

Route::prefix('blog')->group(function () {
    Route::get('/{slug?}', [\App\Http\Controllers\Blog\BlogCategoryController::class, 'index'])->name('blog_category.index');
    Route::get('/post/{slug}', [\App\Http\Controllers\Blog\BlogController::class, 'index'])->name('blog.index');
});

Route::prefix('portfolio')->group(function () {
    Route::get('/', [\App\Http\Controllers\Portfolio\PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/{slug}', [\App\Http\Controllers\Portfolio\PortfolioController::class, 'show'])->name('portfolio.show');
});

Route::get('/faq', [\App\Http\Controllers\FAQ\FAQController::class, 'index'])->name('faq.index');
