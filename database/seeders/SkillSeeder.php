<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Skills::create(
            [
                'skill_name'=>'Laravel',
                'skill_category'=>'programming',
                'skill_level'=>'beginner',

            ]
        );
    }
}
