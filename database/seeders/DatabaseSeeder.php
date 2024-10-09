<?php

namespace Database\Seeders;

use App\Http\Controllers\EventCategoriesController;
use App\Http\Controllers\EventsController;
use App\Models\Event_Categories;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\OrganizersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(OrganizerSeeder::class);
        $this->call(EventCategoriesSeeder::class);
        $this->call(EventsSeeder::class);
    }
}
