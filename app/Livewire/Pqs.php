<?php

namespace App\Livewire;

use App\Enums\PqsType;
use App\Models\Pqs as ModelsPqs;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Pqs extends Component
{
    #[Validate('required')]
    public $type,
        $representId,
        $description;

    public $user;

    public function render()
    {
        $this->user = request()->cookie('user');
        if (isset($this->user)) {
            $this->user = unserialize($this->user);
            $this->representId = $this->user->id;
            return view('livewire.pqs', ['user' => $this->user]);
        } else {
            return $this->redirectRoute('student.user');
        }
    }

    public function store()
    {
        $this->validate();
        $pqs = new ModelsPqs();

        $pqs->student_id = $this->representId;
        $pqs->type = $this->type;
        $pqs->description = $this->description;

        $pqs->save();

        $this->resetExcept("search");
        return session()->flash('status', "Se ha enviado el reporte con numero: #$pqs->id.");
    }
}
