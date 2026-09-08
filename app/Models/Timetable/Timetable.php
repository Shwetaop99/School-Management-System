<?php

namespace App\Models\Timetable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $table = 'timetables';

    protected $fillable = [
        'class_id',
        'section_id',
        'slot_id',
        'subject_id',
        'teacher_id',
        'academic_year',
        'day',
        'start_time',
        'end_time',
        'room',
        'type',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Class
    |--------------------------------------------------------------------------
    */

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Division / Section
    |--------------------------------------------------------------------------
    */

    public function division()
    {
        return $this->belongsTo(Division::class, 'section_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Timetable Slot
    |--------------------------------------------------------------------------
    */

    public function slot()
    {
        return $this->belongsTo(TimetableSlot::class, 'slot_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Subject
    |--------------------------------------------------------------------------
    */

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Teacher
    |--------------------------------------------------------------------------
    */

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}