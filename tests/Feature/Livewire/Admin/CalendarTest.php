<?php

namespace Tests\Feature\Livewire\Admin;

use App\Livewire\Admin\Calendar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CalendarTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Calendar::class)
            ->assertStatus(200);
    }
}
