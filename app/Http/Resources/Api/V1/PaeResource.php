<?php

namespace App\Http\Resources\Api\V1;

use App\Enums\PaeType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaeResource extends JsonResource
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
            'is_notify' => $this->is_report(),
            'type' => PaeType::from($this->type)->name,
            'student_name' => $this->student_name,
            'description' => $this->description,
            'images' => json_decode($this->images),
            'Represent' =>  [
                "id" => $this->student->id,
                'name' => $this->student->name,
                'document' => $this->student->document,
                'grade' => $this->student->grade,
                'last_ip' => $this->student->last_ip
            ],
        ];
    }
}
