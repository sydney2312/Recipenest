<?php

namespace App\Http\Controllers;

use App\Helpers\FlasherHelper;
use App\Http\Requests\StorePostRequest;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve recipes and pass to the view
        $recipe_data = Recipe::list()->get();

        return view('pages.prototype.authors.recipe-list.index', compact('recipe_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.prototype.authors.recipe-create.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();

        // Store the image in the 'public/images/media' directory
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/media', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Add the user_id for the logged-in user
        $validatedData['user_id'] = Auth::id();

        // Create the recipe with validated data
        Recipe::create($validatedData);

        // Flash a success message
        FlasherHelper::alert('success', 'Recipe Created');

        return redirect()->route('authors.recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('pages.prototype.users.recipe-single.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('pages.prototype.authors.recipe-edit.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, string $id)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/media', 'public');
            $validatedData['image'] = $imagePath;
        }

        $recipe = Recipe::findOrFail($id);
        $recipe->update($validatedData);

        FlasherHelper::alert('success', 'Recipe Updated');

        return redirect()->route('authors.recipes.index');
    }
}
