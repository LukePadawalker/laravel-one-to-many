<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = [

        ];
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->id = $project['id'];
            $newProject->title = $project['title'];
            $newProject->description = $project['description'];
            $newProject->image = $project['image'];
            $newProject->save();


        }

        //
    }
}
