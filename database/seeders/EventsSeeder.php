<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<=6; $i++)
        {
            DB::table('events')->insert([
                'id' => $i,
                'date' => Carbon::now()->toFormattedDayDateString(),
                'start_time' => Carbon::now()->toTimeString(),
                'description' => fake() -> text(25),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
// id looping
// title isi manual
// venue isi manual
// date random
// start_time random
// description random
// booking_url -> nullable isi manual
// tags isi manual
// organizer_id -> FK ke table organizers
// event_category_id -> FK ke table event_categories
// active -> default 1, kalau 1 berarti data masih aktif tidak dihapus
// created_at random
// updated_at random
