<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('information.contact');
    }

}
