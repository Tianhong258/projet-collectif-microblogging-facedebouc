<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Générer 10 posts et les insérer dans la base de données
        Post::factory(10)->create();
    }
}
