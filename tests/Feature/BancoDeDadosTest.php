<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class BancoDeDadosTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function banco_esta_funcionando()
    {
        $this->assertTrue(DB::connection()->getDatabaseName() !== null);
    }
}

