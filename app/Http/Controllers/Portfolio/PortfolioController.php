<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
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

        $items = Portfolio::orderByDesc('created_at')->get();

        return view('portfolio.index', compact(
            'items',
            'portfolioCategories'
        ));
    }

    /**
     * @param string $slug
     * @return Application|Factory|View
     */
    public function show(string $slug)
    {
        $item = Portfolio::where('slug', $slug)->get()->first();

        if (!$item) {
            return abort(404);
        }

        $item->addView();


        return view('portfolio.show', compact(
            'item'
        ));
    }

}
