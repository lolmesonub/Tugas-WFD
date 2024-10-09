<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Date;
use Ramsey\Uuid\Type\Integer;

use function Laravel\Prompts\text;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<=6; $i++)
        {
            $title = fake()->text(7); // generate the title first

            DB::table('events')->insert([
                'id' => $i,
                'title' => $title,
                'venue' => fake()->city(),
                'date' => fake()->date(),
                'start_time' => fake()->time(),
                'description' => fake()->text(200),
                'booking_url' => $title . '.com',
                'tags' => fake()->text(5),
                'organizer_id' => rand(1, 5),
                'event_category_id' => rand(1, 3),
                'active' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
