<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\text;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Date;
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
            $title = fake()->text(7);
            $slug = Str::slug($title); // generate the title first

            DB::table('events')->insert([
                'id' => $i,
                'title' => $title,
                'venue' => fake()->city(),
                'date' => fake()->date(),
                'start_time' => fake()->time(),
                'description' => fake()->paragraph(1),
                'booking_url' => $slug . '.com',
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
