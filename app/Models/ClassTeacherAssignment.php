<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassTeacherAssignment extends Model
{
    protected $fillable = [
        'teacher_id',
        'class_name',
        'section',
        'academic_year',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}