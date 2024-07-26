<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pae extends Model
{
    use HasFactory;
    protected $fillable = ["type", "student_name", "description", "images", "is_notify"];
    protected $casts = ['images' => 'json'];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function is_report()
    {
        if ($this->is_notify) {
            return true;
        } else {
            return false;
        }
    }
}
