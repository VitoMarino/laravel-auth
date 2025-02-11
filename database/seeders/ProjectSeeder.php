<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i = 0; $i < 250; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->name();
            $newProject->activity = $faker->realText();
            $newProject->description = $faker->realText();
            $newProject->date = $faker->dateTimeThisMonth();
            $newProject->image = $faker->imageUrl(400, 250, 'projects');
            $newProject->save();
        }
    }
}
