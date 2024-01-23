<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert sample data into the questions into table
        DB::table('question') ->insert([
            [
                'questions' => 'what is the capital of France?',
                'answers' => 'Paris',
            ],
        ]);
    }
}
