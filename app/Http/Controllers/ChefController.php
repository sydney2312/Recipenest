<?php

namespace App\Http\Controllers;

use App\Models\User;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $chef_data = User::list()->get();
        return view('pages.prototype.users.chef-list.index', compact('chef_data'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return true;
    }


    /**
     * title
     *
     * @param string
     * @return void
     */
    public function showPortfolio(string $id)
    {
        return true;
    }
}
