<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Transaction;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function homepage_displays_products()
    {
        Product::create([
            'name' => 'Manual Product',
            'quantity' => 10,
        ]);

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSeeText('Manual Product');
    }

    /** @test */
    public function transactions_page_displays_transactions()
    {
        $product = Product::create([
            'name' => 'Sold Item',
            'quantity' => 20,
        ]);

        Transaction::create([
            'product_id' => $product->id,
            'quantity' => 5,
            'category' => 'terjual',
        ]);

        $response = $this->get(route('transactions.index'));

        $response->assertStatus(200);
        $response->assertSeeText('Sold Item');
    }
}
