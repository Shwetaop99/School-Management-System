<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'email',
        'phone',
        'alternate_phone',
        'address',
        'city',
        'state',
        'qualification',
        'subject',
        'specialization',
        'experience',
        'employment_type',
        'joining_date',
        'status',
        'profile_photo',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'joining_date' => 'date',
        'experience' => 'decimal:1',
    ];

    /**
     * Get the teacher's complete name.
     */
    public function getFullNameAttribute(): string
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }
    public function classTeacherAssignments()
{
    return $this->hasMany(ClassTeacherAssignment::class);
}
}