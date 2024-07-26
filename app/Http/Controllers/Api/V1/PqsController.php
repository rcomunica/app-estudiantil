<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\PqsCollection;
use App\Http\Resources\Api\V1\PqsResource;
use App\Models\Pqs;
use Illuminate\Http\Request;

class PqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PqsCollection(Pqs::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $pqs = new Pqs();

            $pqs->student_id = $request->student_id;
            $pqs->type = $request->type;
            $pqs->description = $request->description;

            $pqs->save();

            return response()->json(
                [
                    "Estado:" => "Registrada pqs",
                    "response" => 200,
                    "Id report" => $pqs->id,
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(["error" => $th], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PqsResource(Pqs::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pqs $pqs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pqs $pqs)
    {
        //
    }
}
