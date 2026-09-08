<?php

namespace Database\Seeders;

use App\Models\Timetable\TimetableSlot;
use Illuminate\Database\Seeder;

class TimetableSlotSeeder extends Seeder
{
    public function run(): void
    {
        $slots = [
            [
                'start_time' => '08:00',
                'end_time'   => '09:00',
                'type'       => 'period',
                'label'      => null,
                'sort_order' => 1,
                'status'     => true,
            ],
            [
                'start_time' => '09:00',
                'end_time'   => '10:00',
                'type'       => 'period',
                'label'      => null,
                'sort_order' => 2,
                'status'     => true,
            ],
            [
                'start_time' => '10:00',
                'end_time'   => '10:15',
                'type'       => 'break',
                'label'      => 'Break',
                'sort_order' => 3,
                'status'     => true,
            ],
            [
                'start_time' => '10:15',
                'end_time'   => '11:15',
                'type'       => 'period',
                'label'      => null,
                'sort_order' => 4,
                'status'     => true,
            ],
            [
                'start_time' => '11:15',
                'end_time'   => '12:15',
                'type'       => 'period',
                'label'      => null,
                'sort_order' => 5,
                'status'     => true,
            ],
            [
                'start_time' => '12:15',
                'end_time'   => '13:00',
                'type'       => 'lunch',
                'label'      => 'Lunch',
                'sort_order' => 6,
                'status'     => true,
            ],
            [
                'start_time' => '13:00',
                'end_time'   => '14:00',
                'type'       => 'period',
                'label'      => null,
                'sort_order' => 7,
                'status'     => true,
            ],
            [
                'start_time' => '14:00',
                'end_time'   => '15:00',
                'type'       => 'period',
                'label'      => null,
                'sort_order' => 8,
                'status'     => true,
            ],
        ];

        foreach ($slots as $slot) {
            TimetableSlot::updateOrCreate(
                [
                    'start_time' => $slot['start_time'],
                    'end_time'   => $slot['end_time'],
                ],
                $slot
            );
        }
    }
}