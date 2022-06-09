<?php

namespace Tests\Feature;

use App\Http\Controllers\FibonacciController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FibonacciTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function show_list_fibonacci()
    {
        $fibonacci = new FibonacciController();
        $this->assertEquals(['0','1','1','2','3','5'], $fibonacci->calcularFibonacci(5));
    }
}
