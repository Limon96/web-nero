<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Repositories\BlogPostRepository;
use App\Repositories\PortfolioCategoryRepository;
use App\Traits\HasBlogCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PortfolioController extends Controller {

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $portfolioCategories = app(PortfolioCategoryRepository::class)->all();

        return view('portfolio.index', compact(
            'portfolioCategories'
        ));
    }


}
