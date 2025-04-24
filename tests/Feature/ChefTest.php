<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class ChefTest extends TestCase
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
        $chef_data = User::all();

        $response = $this->get('/chefs');

        $response->assertStatus(200);

        foreach ($chef_data as $chef) {
            $response->assertSee($chef->name);
            $response->assertSee($chef->short_description);
        }
    }

    public function testShow()
    {
        $chef = User::findOrFail(1);

        $response = $this->get('/chefs/1');

        $response->assertStatus(200);

        $response->assertSee($chef->name);
    }
}
