<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            \App\Models\User::factory(5)->has(\App\Models\Recipe::factory()->count(5))->create();
        
    }
}
