<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Week;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $days = [
            ['id' => 1, 'day' => '月曜日', 'day_eg' => 'Monday'],
            ['id' => 2, 'day' => '火曜日', 'day_eg' => 'Tuesday'],
            ['id' => 3, 'day' => '水曜日', 'day_eg' => 'Wednesday'],
            ['id' => 4, 'day' => '木曜日', 'day_eg' => 'Thursday'],
            ['id' => 5, 'day' => '金曜日', 'day_eg' => 'Friday'],
            ['id' => 6, 'day' => '土曜日', 'day_eg' => 'Saturday'],
            ['id' => 7, 'day' => '日曜日', 'day_eg' => 'Sunday'],
        ];

        foreach ($days as $day) {
            Week::updateOrCreate(['id' => $day['id']], $day);
        }
    }
}
