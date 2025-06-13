<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransactionController;

class ExampleTest extends TestCase
{
    /** @test */
    public function stock_controller_has_expected_methods()
    {
        $this->assertTrue(method_exists(StockController::class, 'index'));
        $this->assertTrue(method_exists(StockController::class, 'store'));
        $this->assertTrue(method_exists(StockController::class, 'adjust'));
        $this->assertTrue(method_exists(StockController::class, 'destroy'));
    }

    /** @test */
    public function transaction_controller_has_index_method()
    {
        $this->assertTrue(method_exists(TransactionController::class, 'index'));
    }
}
