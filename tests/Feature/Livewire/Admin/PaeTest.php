<?php

namespace Tests\Feature\Livewire\Admin;

use App\Livewire\Admin\Pae;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PaeTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Pae::class)
            ->assertStatus(200);
    }
}
