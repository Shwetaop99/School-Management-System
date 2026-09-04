<?php

namespace App\Models\Timetable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimetableSlot extends Model
{
    use HasFactory;

    protected $table = 'timetable_slots';

    protected $fillable = [
        'start_time',
        'end_time',
        'type',
        'label',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function timetables()
    {
        return $this->hasMany(Timetable::class, 'slot_id');
    }
}