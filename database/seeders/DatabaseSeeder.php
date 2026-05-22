<?php

namespace Database\Seeders;

use \App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(AdminUserSeeder::class);
        
        User::create([
            'name' => 'Samantha Karengera',
            'email' => 'samantha.karengera@ehb.student.be',
            'password' => '123',
            'is_admin' => true,
        ]);
        


        User::factory(10)->create();
        Category::factory(5)->create();
       // Faq::factory(10)->create();
        Article::factory(20)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
