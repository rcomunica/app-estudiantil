<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\CalendarCollection;
use App\Http\Resources\Api\V1\CalendarResource;
use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CalendarCollection(Calendar::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $calendar = new Calendar();

            $calendar->date = $request->date;
            $calendar->title = $request->title;
            $calendar->description = $request->description;

            $calendar->save();

            return response()->json(
                [
                    "Estado:" => "Registrado evento",
                    "response" => 200,
                    "Id event" => $calendar->id,
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(["error" => $th, "response" => 500], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendar $calendar)
    {
        return new CalendarResource(Calendar::findOrFail($calendar->id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calendar $calendar)
    {
        Calendar::updateOrCreate(
            ["id" => $calendar->id],
            [
                "date" => $request->name,
                "title" => $request->title,
                "description" => $request->description,
            ]
        );

        return response()->json(
            [
                "Estado" => "Actualizado",
                "Status" => 200,
                "Estudiante" => $calendar->id
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendar $calendar)
    {
        try {
            $calendar->delete();
            return response()->json(
                [
                    "Estado" => "Evento '$calendar->title' ($calendar->id), eliminado",
                    "Status" => 200,
                    "Estudiante" => $calendar->id
                ]
            );
        } catch (\Throwable $th) {
            return response()->json(["error" => $th, "response" => 500], 500);
        }
    }
}
