<?php

namespace App\Http\Controllers\Portfolio\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PortfolioCategory\StoreRequest;
use App\Http\Requests\Admin\PortfolioCategory\UpdateRequest;
use App\Models\PortfolioCategory;
use App\Repositories\PortfolioCategoryRepository;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = app(PortfolioCategoryRepository::class)->all();

        return view('portfolio_category.admin.index', compact(
            'items'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $item = PortfolioCategory::make();

        $categories = app(PortfolioCategoryRepository::class)->forSelect();;

        return view('portfolio_category.admin.form', compact(
            'item',
            'categories'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $item = PortfolioCategory::create($data);

        if ($item) {
            return redirect()
                ->route('admin.portfolio_category.index')
                ->with(['success' => "Запись [{$item->id}] успешно сохранена"]);
        } else {
            return back()
                ->withErrors(['msg' => "Ошибка сохранения"])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = PortfolioCategory::findOrFail($id);

        $categories = app(PortfolioCategoryRepository::class)->forSelect();;

        return view('portfolio_category.admin.form', compact(
            'item',
            'categories'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, $id)
    {
        $item = PortfolioCategory::findOrFail($id);
        $data = $request->validated();

        $item->update($data);

        return redirect()
            ->route('admin.portfolio_category.index')
            ->with(['success' => "Запись [$id] успешно сохранена"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $item = PortfolioCategory::findOrFail($id);

        $item->forceDelete();

        return redirect()
            ->route('admin.portfolio_category.index')
            ->with(['success' => "Запись [$id] удалена"]);
    }
}
