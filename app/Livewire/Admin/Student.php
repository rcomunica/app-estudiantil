<?php

namespace App\Livewire\Admin;

use App\Models\Student as ModelsStudent;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Student extends Component
{
    public $students;
    public $student_id;
    #[Validate('required')]
    public $name,
        $document,
        $grade;

    public $modal = false, $editing = false;
    public function render()
    {
        $this->students = ModelsStudent::all();

        return view(
            'livewire.admin.student.view',
            [
                "students" => $this->students
            ]
        );
    }

    public function create()
    {
        $this->resetExcept("search");
        $this->openModal();
    }

    public function openModal()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
    }

    public function store()
    {
        $this->validate();

        $student = ModelsStudent::updateOrCreate(["id" => $this->student_id], [
            "document" => $this->document,
            "name" => $this->name,
            "grade" => $this->grade
        ]);

        session()->flash("message", $this->student_id ? "Actualización exitosa" : "Creacion exitosa");
        $this->closeModal();
        $this->resetExcept("search");
    }

    public function edit($id)
    {
        $this->editing = true;
        $student = ModelsStudent::findOrFail($id);
        $this->student_id = $id;
        $this->document = $student->document;
        $this->name = $student->name;
        $this->grade = $student->grade;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsStudent::find($id)->delete();
        return session()->flash("message", "Registro eliminado correctamente");
    }
}
