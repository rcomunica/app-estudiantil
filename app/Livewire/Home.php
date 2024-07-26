<?php

namespace App\Livewire;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function render(Request $request)
    {
        return view('livewire.home');
    }
}
