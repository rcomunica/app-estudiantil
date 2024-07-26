<?php

namespace App\Livewire\Admin;

use App\Models\Pqs as ModelsPqs;
use Livewire\Component;

class Pqs extends Component
{
    public $modal = false;
    public $editing = false;

    public $pqsId,
        $student,
        $type,
        $description;
    public ModelsPqs $pqs;
    public function mount(ModelsPqs $pqs)
    {
        $this->pqs = $pqs;
    }
    public function render()
    {
        // dd(isset($this->pqs->id));
        if (isset($this->pqs->id)) {
            return view('livewire.admin.pqs.show');
        } else {
            return view('livewire.admin.pqs.view', [
                "modelPqs" => ModelsPqs::all(),
            ]);
        }
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function edit($id)
    {
        return redirect()->route('admin.pqs.show', ["pqs" => $id]);
    }

    public function delete($id)
    {
        $pqs = ModelsPqs::findOrFail($id);
        $pqs->delete();
        return session()->flash("message", "Eliminado!");
    }
}
