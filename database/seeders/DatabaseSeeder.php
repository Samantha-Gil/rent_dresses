<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([//by running "php artisan db:seed" access the content 
            CustomerSeeder::class,
            CategorySeeder::class,
            DressSeeder::class,
            RentSeeder::class,
            PaymentSeeder::class

        ]);
    }
}
