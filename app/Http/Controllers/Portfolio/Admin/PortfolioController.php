<?php

namespace App\Http\Controllers\Portfolio\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Portfolio\StoreRequest;
use App\Http\Requests\Admin\Portfolio\UpdateRequest;
use App\Models\Portfolio;
use App\Repositories\PortfolioCategoryRepository;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Portfolio
            ::select([
                'id',
                'title',
                'created_at',
                'updated_at',
                'publish_at',
                'portfolio_category_id',
                'status',
                'slug',
            ])
            ->with(['category'])
            ->get();

        return view('portfolio.admin.index', compact(
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
        $categories = app(PortfolioCategoryRepository::class)->forSelect();
        $item = Portfolio::make();

        return view('portfolio.admin.form', compact(
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

        $item = Portfolio::create($data);

        if ($item) {
            return redirect()
                ->route('admin.portfolio.index')
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
        $item = Portfolio::findOrFail($id);

        $categories = app(PortfolioCategoryRepository::class)->forSelect();

        return view('portfolio.admin.form', compact(
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
        $item = Portfolio::findOrFail($id);

        $data = $request->validated();

        $item->update($data);

        return redirect()
            ->route('admin.portfolio.index')
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
        $item = Portfolio::findOrFail($id);

        $item->forceDelete();

        return redirect()
            ->route('admin.portfolio.index')
            ->with(['success' => "Запись [$id] удалена"]);
    }
}
