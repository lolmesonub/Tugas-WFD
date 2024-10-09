<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'expo', 'active' => 1],
            ['name' => 'concert', 'active' => 1],
            ['name' => 'conference', 'active' => 1],
        ];

        DB::table('event_categories')->insert($categories);
    }
}
