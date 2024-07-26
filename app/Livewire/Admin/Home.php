<?php

namespace App\Livewire\Admin;

use App\Models\Pae;

use App\Models\Pqs;
use App\Models\Student;
use Livewire\Component;

class Home extends Component
{
    // Render variables
    public $pae, $pqs, $students;
    public $lastFivePae, $lastFivePqs;
    public function render()
    {
        $this->pae = Pae::all();
        $this->pqs = Pqs::all();
        $this->students = Student::all();

        $this->lastFivePae = Pae::orderBy('id', 'desc')->limit(5)->get();
        $this->lastFivePqs = Pqs::orderBy('id', 'desc')->limit(5)->get();

        return view('dashboard', [
            "pae" => $this->pae,
            "pqs" => $this->pqs,
            "students" => $this->students,
            "lastPae" => $this->lastFivePae,
            "lastPqs" => $this->lastFivePqs,
        ]);
    }
}
