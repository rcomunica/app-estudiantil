<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\StudentCollection;
use App\Http\Resources\Api\V1\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new StudentCollection(Student::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();

        $student->name = $request->name;
        $student->document = $request->document;
        $student->grade = $request->grade;

        $student->save();

        return response()->json(
            [
                "Estado:" => "Estudiante $student->name registrado",
                "response" => 200,
                "Id report" => $student->id,
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Student $student)
    {
        // Get IP
        $student->last_ip = $request->ip();
        $student->save();
        return new StudentResource($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        Student::updateOrCreate(
            ["id" => $student->id],
            [
                "name" => $request->name,
                "document" => $request->document,
                "grade" => $request->grade,
            ]
        );

        return response()->json(
            [
                "Estado" => "Actualizado",
                "Status" => 200,
                "Estudiante" => $student->id
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(
            [
                "Estado" => "Estudiante $student->name ($student->id), eliminado",
                "Status" => 200,
                "Estudiante" => $student->id
            ]
        );
    }
}
