<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@midex.com',
            'password' => bcrypt('admin123'),
        ]);

        Hero::factory(1)->create();
        About::factory(1)->create();
        Contact::factory(1)->create();
        Project::factory(10)->create();
        Service::factory(10)->create();
        Product::factory(10)->create();
    }
}
