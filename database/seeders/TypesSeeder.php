<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator;


class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $labels = ['FrontEnd', 'BackEnd', 'Design', 'Fullstack', 'UI/UX'];

        foreach ($labels as $label) {
            $type = new Type();
            $type->label = $label;
            $type->color = $faker->hexColor();
            $type->save();
        }
        //
    }
}
