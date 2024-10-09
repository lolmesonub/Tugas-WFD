<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<=5; $i++) {
            $name = fake()->text(7);
            $slug = Str::slug($name);
            DB::table('organizers')->insert([
                'id' => $i,
                'name' => $name,
                'description' => fake()->text(25),
                'facebook_link' => 'https://facebook.com/' . $slug,
                'x_link' => 'https://x.com/' . $slug,
                'website_link' => 'https://www.' . $slug . '.com',
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
