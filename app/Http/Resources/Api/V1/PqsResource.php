<?php

namespace App\Http\Resources\Api\V1;

use App\Enums\PqsType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PqsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'represent' => [
                'name' => $this->student->name,
                'grade' => $this->student->grade,
                'document' => $this->student->document,
            ],
            'type' => PqsType::from($this->type)->name,
            'description' => $this->description,
        ];
    }
}
