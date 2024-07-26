<?php

namespace App\Http\Resources\Api\V1;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'Developers' => [
                    "Creator" => "Cont. Julian Ramirez",
                    "Year" => "2024"
                ],
                'path' => config('app.url') . "/api/v1/students",
                'total' => Student::all()->count(),
            ]
        ];
    }
}
