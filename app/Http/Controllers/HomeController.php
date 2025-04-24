<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the RecipeNest layout as homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('components.mylayouts.layout-prototype');
    }
}
