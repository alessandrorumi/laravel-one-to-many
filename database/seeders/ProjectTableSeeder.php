<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Type;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // 100 Projects in Ordine Random
    public function run()
    {
        Project::factory()
                ->count(100)
                ->make()
                ->each(function($project) {

                $type = Type:: inRandomOrder() -> first();
                $project -> type() -> associate($type);

                $project -> save();
                });
    }

    // 10 Projects per ogni Type
    // public function run()
    // {
    //     $types = Type::all();

    //     $types->each(function($type) {
    //         Project::factory()
    //             ->count(10) // Creiamo 10 progetti per ogni tipo
    //             ->make()
    //             ->each(function($project) use ($type) {
    //                 $project->type()->associate($type);
    //                 $project->save();
    //             });
    //     });
    // }
}
