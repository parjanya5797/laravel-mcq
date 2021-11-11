<?php

namespace Database\Seeders;

use App\Models\Questions;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        Questions::create([
            'question' => 'A source program is the program written in which level language?',
            'ans_1' => 'English',
            'ans_2' => 'Symbolic',
            'ans_3' => 'High Level',
            'ans_4' => 'Machine',
            'slug' => \Str::slug('A source program is the program written in which level language?'),
            'uuid' => \Str::uuid(),
            'correct_answer' => 4,
        ]);

        Questions::create([
            'question' => 'You have to leave your shoes _______ the door when you enter the house.',
            'ans_1' => 'in',
            'ans_2' => 'over',
            'ans_3' => 'to',
            'ans_4' => 'outside',
            'slug' => \Str::slug('You have to leave your shoes _______ the door when you enter the house.'),
            'uuid' => \Str::uuid(),
            'correct_answer' => 4,
        ]);

    }
}
