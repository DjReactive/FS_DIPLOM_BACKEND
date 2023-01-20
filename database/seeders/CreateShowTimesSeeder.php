<?php

namespace Database\Seeders;

use App\Models\ShowTimes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateShowTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShowTimes::create([
            'hall_id' => 1,
            'movie_id' => 1,
            'start_time' => '22:00',
        ]);
        ShowTimes::create([
            'hall_id' => 1,
            'movie_id' => 2,
            'start_time' => '14:00',
        ]);
        ShowTimes::create([
            'hall_id' => 2,
            'movie_id' => 1,
            'start_time' => '12:00',
        ]);
        ShowTimes::create([
            'hall_id' => 2,
            'movie_id' => 2,
            'start_time' => '15:00',
        ]);
    }
}
