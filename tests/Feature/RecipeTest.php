<?php

namespace Tests\Feature;

use App\Models\Recipe;
use Tests\TestCase;

class RecipeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testExample(): void
    {
        $response = $this->get('/chefs');

        $response->assertStatus(200);
    }

    public function testIndex()
    {
        $recipe_data = Recipe::all();

        $response = $this->get('/recipes');

        $response->assertStatus(200);
    }

    public function testShow()
    {
        $recipe = Recipe::findOrFail(1);

        $response = $this->get('/recipes/1');

        $response->assertStatus(200);

        $response->assertSee($recipe->title);
    }
}
