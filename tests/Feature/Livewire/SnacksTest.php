<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Snacks;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SnacksTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Snacks::class)
            ->assertStatus(200);
    }
}
