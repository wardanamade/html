<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            // StatusSeeder::class,
            // PrioritySeeder::class,
            // TeamSeeder::class,
            // LevelSeeder::class,
            // ClassificationSeeder::class,
            // CategorySeeder::class,
            // SubcategorySeeder::class,
            // AgentSeeder::class,
            // TicketSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
