<?php

namespace App\Http\Controllers;

use App\Models\User;

class ChefController extends Controller
{
    /**
     * Retrieve all users / chefs and display on the chef list.
     */
    public function index()
    {
        // Retrieve all chefs
        $chef_data = User::list()->get();

        // Return the view with the chef data
        return view('pages.prototype.users.chef-list.index', compact('chef_data'));
    }

    public function showProfile($id)
    {
        $chef = User::findOrFail($id);  // Use User model instead of Chef

        return view('pages.prototype.users.profile.show', compact('chef'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve the chef by ID
        $chef = User::list()->find($id);  // Removed the 'author' scope

        // Ensure the chef exists before returning a view
        if (!$chef) {
            abort(404, 'Chef not found');
        }

        // Return the chef's profile view with chef data
        return view('pages.prototype.users.profile.show', compact('chef'));
    }

    /**
     * Display the chef's portfolio.
     */
    public function showPortfolio(string $id)
    {
        // Retrieve the chef by ID
        $chef = User::list()->find($id);

        // Ensure the chef exists before fetching portfolio data
        if (!$chef) {
            abort(404, 'Chef not found');
        }

        // Fetch the featured recipes for the chef
        $featured_data = $chef->recipes()->where('featured', 1)->get();

        // Return the portfolio view with chef and featured recipe data
        return view('pages.prototype.users.portfolio.main', compact('chef', 'featured_data'));
    }
}
