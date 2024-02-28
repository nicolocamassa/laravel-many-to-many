<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project as Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newProject = new Project();
            $newProject->title = $faker->words(3, true);
            $newProject->description = $faker->sentence();
            $newProject->date = $faker->date();
            $newProject->languages = $faker->randomElement(['Italiano', 'Inglese', 'Tedesco', 'Francese']);
            $newProject->status = $faker->randomElement(['Completato', 'In Corso', 'Iniziale']);
            $newProject->save();
        }

    }
}
