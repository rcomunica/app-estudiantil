<?php

namespace App\Livewire\Admin;

use App\Models\Pae as ModelsPae;
use Livewire\Component;

class Pae extends Component
{

    public ModelsPae $pae;
    public function mount(ModelsPae $pae)
    {
        $this->pae = $pae;
    }

    public function render()
    {
        if (isset($this->pae->id)) {
            return view('livewire.admin.pae.show');
        } else {
            return view('livewire.admin.pae.view', [
                "modelPae" => ModelsPae::all(),
            ]);
        }
    }

    public function edit($id)
    {
        return redirect()->route('admin.pae.show', ["pae" => $id]);
    }

    public function delete($id)
    {
        $pae = ModelsPae::findOrFail($id);
        $pae->delete();
        return session()->flash("message", "Eliminado!");
    }
}
