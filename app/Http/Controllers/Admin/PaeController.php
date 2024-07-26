<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pae;
use Illuminate\Http\Request;

class PaeController extends Controller
{
    public $pae;
    public function render()
    {
        $this->pae = Pae::all();
        return view('website.admin.pae', ["pae" => $this->pae]);
    }
}
