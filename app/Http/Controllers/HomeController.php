<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = unserialize($request->cookie('student'));
        if (isset($user)) {
            return view('livewire.home', ["user" => $user]);
        } else {
            return redirect()->route('student.user');
        }
    }

    public function loggin()
    {
        return view('user');
    }

    public function logginStudent(Request $request)
    {
        $document = $request->input('document');

        $student = Student::where('document', $document)->first();

        if (isset($student)) {
            // Guardar IP
            $student->last_ip = $request->ip();
            $student->save();
            // Guardar Cookie
            // Redirigir a inicio

            return response()->redirectTo('/')->cookie('student', serialize($student), 360);
        } else {
            return redirect()->route('student.user')->with('error', "No se encontro el documento");
        }
    }
}
