<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class UnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function index_displays_products()
    {
        Product::factory()->create(['name' => 'TestProduct']);
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('TestProduct');
    }

    /** @test */
/** @test */
    public function store_creates_product()
    {
        $response = $this->post(route('stocks.store'), [
            'name' => 'New Product',
            'quantity' => 10,
        ]);

        $response->assertRedirect('/');
        $this->assertDatabaseHas('products', [
            'name' => 'New Product',
            'quantity' => 10,
        ]);
    }

    /** @test */
    public function transaction_index_returns_success()
    {
        $response = $this->get('/transactions');
        $response->assertStatus(200);
    }
}
