<?php

namespace App\Livewire;

use App\Models\Pae;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Snacks extends Component
{

    use WithFileUploads;

    // Form variables
    #[Validate('required')]
    public $studentName,
        $type,
        $description,
        $files = [],
        $is_notify,
        $representId;

    public $user;

    public function render()
    {
        $this->user = request()->cookie('user');
        if (isset($this->user)) {
            $this->user = unserialize($this->user);
            $this->representId = $this->user->id;
            return view('livewire.snacks', ['user' => $this->user]);
        } else {
            return $this->redirectRoute('student.user');
        }
    }

    public function store()
    {
        $this->validate();

        $photos = [];

        $pae = new Pae();

        $pae->student_id = $this->representId;
        $pae->type = $this->type;
        $pae->student_name = $this->studentName;
        $pae->description = $this->description;
        foreach ($this->files as $file) {
            $filePath = Storage::disk('images')->put('/', $file);

            $photos[] = env('APP_URL') . "/storage/pae/" . $filePath;
        }

        $pae->images = json_encode($photos);
        $pae->is_notify = $this->is_notify;
        $pae->save();

        $this->resetExcept("search");
        return session()->flash('status', "Se ha enviado el reporte con numero: #$pae->id.");
    }
}
