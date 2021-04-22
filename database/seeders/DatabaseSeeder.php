<?php

namespace Database\Seeders;

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
       // $this->call([
         //   RecipesSeeder::class,
         $this->call([
            UsersSeeder::class,
            RecipesSeeder::class,
            CommentsSeeder::class,
            ContactSeeder::class,
            //Recipes_recipesSeeder::class,
            
        ]);
        //]);
        
    }
}
