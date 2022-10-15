<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;

class PolicyController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('information.policy');
    }

}
