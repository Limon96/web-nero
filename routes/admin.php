<?php

use Illuminate\Support\Facades\Route;


Route::prefix('_manager')->group(function() {

    Route::get('/', function () {
        return redirect()
            ->route('login');
    })->name('admin.home');

    Auth::routes();

    Route::group(['middleware' => ['role:admin']], function () {

        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

        Route::resource('landing', \App\Http\Controllers\Landing\Admin\LandingController::class)->names('admin.landing');
        Route::get('landing/{landing}/copy', [\App\Http\Controllers\Landing\Admin\LandingController::class, 'copy'])->name('admin.landing.copy');

        Route::get('pagebuilder/{block}', [\App\Http\Controllers\PageBuilder\PageBuilderController::class, 'index'])->name('admin.pagebuilder.index');

        Route::get('portfolio/setting', [\App\Http\Controllers\Portfolio\Admin\SettingController::class, 'index'])->name('admin.portfolio.setting.index');
        Route::post('portfolio/setting', [\App\Http\Controllers\Portfolio\Admin\SettingController::class, 'update'])->name('admin.portfolio.setting.update');

        Route::get('blog/setting', [\App\Http\Controllers\Blog\Admin\SettingController::class, 'index'])->name('admin.blog.setting.index');
        Route::post('blog/setting', [\App\Http\Controllers\Blog\Admin\SettingController::class, 'update'])->name('admin.blog.setting.update');

        Route::name('admin.')->group(function() {
            Route::resources([
                'blog' => \App\Http\Controllers\Blog\Admin\BlogController::class,
                'blog_category' => \App\Http\Controllers\Blog\Admin\BlogCategoryController::class,
                'faq' => \App\Http\Controllers\FAQ\Admin\FAQController::class,
                'faq_category' => \App\Http\Controllers\FAQ\Admin\FAQCategoryController::class,
                'portfolio' => \App\Http\Controllers\Portfolio\Admin\PortfolioController::class,
                'portfolio_category' => \App\Http\Controllers\Portfolio\Admin\PortfolioCategoryController::class,
            ]);
        });
    });
});
