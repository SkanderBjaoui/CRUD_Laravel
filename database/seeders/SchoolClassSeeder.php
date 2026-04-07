<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchoolClass;

class SchoolClassSeeder extends Seeder
{
    public function run(): void
    {
        SchoolClass::create([
            'name' => 'Mathematics 101',
            'grade_level' => '9th Grade',
            'description' => 'Introduction to algebra and geometry'
        ]);

        SchoolClass::create([
            'name' => 'English Literature',
            'grade_level' => '10th Grade',
            'description' => 'Study of classic literature and writing skills'
        ]);

        SchoolClass::create([
            'name' => 'Physics 201',
            'grade_level' => '11th Grade',
            'description' => 'Advanced physics concepts and experiments'
        ]);

        SchoolClass::create([
            'name' => 'Chemistry Lab',
            'grade_level' => '10th Grade',
            'description' => 'Hands-on chemistry experiments and theory'
        ]);
    }
}
