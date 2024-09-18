<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(3)->create();
        /** 
        *$customer = new Category();
        *$customer->name = "Gala";
        *$customer->description = "Vestido para reuniones formales";
        *$customer->save();
        */
    }
}
