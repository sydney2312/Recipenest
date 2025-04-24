<?php

namespace App\Http\Controllers;

use App\Helpers\FlasherHelper;
use App\Helpers\ImageHelper;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Auth;

class RecipeDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipe_data = Recipe::list()->forUser(Auth::id())->get();

        return view('pages.custom.authors.recipe-list.index', compact('recipe_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.custom.authors.recipe-create.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['user_id'] = Auth::id();

        $validatedData['image'] = ImageHelper::imageUpload($validatedData['image'], 'media');

        Recipe::create($validatedData);

        FlasherHelper::alert('success', 'Recipe Created');

        return redirect()->route('authors.recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return true;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('pages.custom.authors.recipe-edit.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        $validatedData = $request->validated();

        if (!empty($validatedData['image'])) {
            $validatedData['image'] = ImageHelper::imageUpload($validatedData['image'], 'media');
        }

        $recipe = Recipe::findOrFail($id);
        $recipe->update($validatedData);

        FlasherHelper::alert('success', 'Recipe Updated');

        return redirect()->route('authors.recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return true;
    }
}
