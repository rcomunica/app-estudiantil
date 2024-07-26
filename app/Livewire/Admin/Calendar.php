<?php

namespace App\Livewire\Admin;

use App\Models\Calendar as ModelsCalendar;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Calendar extends Component
{
    public $calendarId;


    #[Validate('required')]
    public $title,
        $date,
        $description;

    public $modal = false;
    public $editing = false;
    public function render()
    {

        $calendar = ModelsCalendar::all();
        return view('livewire.admin.calendar.view', ["calendar" => $calendar]);
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function create()
    {
        $this->resetExcept("search");
        $this->openModal();
    }

    public function store()
    {
        $this->validate();

        $calendar = ModelsCalendar::updateOrCreate(
            ["id" => $this->calendarId],
            [
                "date" => $this->date,
                "title" => $this->title,
                "description" => $this->description,
            ]

        );

        $this->closeModal();
        $this->resetExcept("search");
        return session()->flash("message", $this->calendarId ? "Actualización exitosa" : "Creacion exitosa");
    }

    public function edit($id)
    {
        $this->editing = true;
        $calendar = ModelsCalendar::findOrFail($id);
        $this->calendarId = $id;
        $this->date = $calendar->date;
        $this->title = $calendar->title;
        $this->description = $calendar->description;

        $this->openModal();
    }

    public function delete($id)
    {
        ModelsCalendar::find($id)->delete();
        return session()->flash("message", "Registro eliminado correctamente");
    }
}
