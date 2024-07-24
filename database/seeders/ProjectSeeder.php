<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'title' => 'Project 1',
            'description' => 'Description for project 1',
            'image' => 'path/to/image1.jpg'
        ]);

        Project::create([
            'title' => 'Project 2',
            'description' => 'Description for project 2',
            'image' => 'path/to/image2.jpg'
        ]);
    }
}
