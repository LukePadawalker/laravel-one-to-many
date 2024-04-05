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
        $projects = $projects = [
            [
                'title' => 'Boolzapp',
                'slug' => 'boolzapp',
                'description' => 'Questo progetto è la copia di whatsapp',
                'image' => '',
            ],
            [
                'title' => 'Spotify',
                'slug' => 'spotify',
                'description' => 'Questo progetto vuole replicare la parte grafica di Spotify',
                'image' => '',
            ],
            [
                'title' => 'Boolflix',
                'slug' => 'boolflix',
                'description' => 'Questo sito è la copia semi-funzionante di Netflix',
                'image' => '',
            ],


        ];


        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->fill($project);
            $newProject->save();


        }

        //
    }
}
