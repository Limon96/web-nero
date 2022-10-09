<?php

namespace App\Http\Controllers\Portfolio\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio_settings.setting');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $data = $request->all([
            'title',
            'meta_title',
            'meta_description',
            'meta_keywords',
            'og_title',
            'og_description',
        ]);

        $data['og_image'] = '';

        $file = $request->file('image');

        if ($file) { // был загружен файл изображения
            $path = $file->store('portfolio/images', 'public');
            $data['og_image'] = 'storage/' . $path;
        }

        foreach ($data as $key => $value) {
            Setting::where('key', $key)->updateOrInsert([
                'key' => 'portfolio.' . $key
            ], ['key' => 'portfolio.' . $key,
                'value' => $value]);
        }

        Cache::flush();

        return redirect()
            ->route('admin.portfolio.setting.index')
            ->with(['success' => 'Успешно сохранено']);
    }

}
