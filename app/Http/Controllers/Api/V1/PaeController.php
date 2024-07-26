<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\v1\PaeCollection;
use App\Http\Resources\Api\V1\PaeResource;
use App\Models\Pae;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PaeCollection(Pae::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file());
        try {

            $photos = [];

            $pae = new Pae();

            $pae->student_id = $request->student_id;
            $pae->student_name = $request->student_name;
            $pae->type = $request->type;
            $pae->description = $request->description;
            foreach ($request->file() as $file) {
                $filePath = Storage::disk('images')->put('/', $file);
                $photos[] = env('APP_URL') . "/storage/pae/" . $filePath;
            }

            $pae->images = json_encode($photos);
            $pae->is_notify = $request->is_notify;

            $pae->save();

            return response()->json(
                [
                    "Estado:" => "Registrado",
                    "response" => 200,
                    "Id report" => $pae->id,
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
        return new PaeResource(Pae::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pae $pae)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pae $pae)
    {
        //
    }
}
