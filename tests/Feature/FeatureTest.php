<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;

class FeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        Product::factory()->create(['name' => 'CI Product']);

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('CI Product');
    }
}
