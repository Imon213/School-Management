<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \App\Models\Auth\Story::factory()->create([
            'title' => 'Laboni',
            'image' => 'profile.jpg',
            'category' => 'funny',
            'story'=> 'This is so funny',
           
        ]);
    }
}
