<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pqs;
use Illuminate\Http\Request;

class PqsController extends Controller
{
    public $pqs;
    public function render()
    {
        $this->pqs = Pqs::all();
        return view('website.admin.pqs', ["pqs" => $this->pqs]);
    }
}
