<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Pqs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PqsTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Pqs::class)
            ->assertStatus(200);
    }
}
