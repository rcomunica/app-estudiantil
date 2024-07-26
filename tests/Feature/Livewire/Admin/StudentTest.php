<?php

namespace Tests\Feature\Livewire\Admin;

use App\Livewire\Admin\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Student::class)
            ->assertStatus(200);
    }
}
