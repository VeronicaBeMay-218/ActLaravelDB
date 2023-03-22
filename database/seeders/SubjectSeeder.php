<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Supoort\Str;
use Illuminate\Supoort\Facades\DB;
use Illuminate\Supoort\Facades\Hash;



class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Subject::factory()
        ->count(250)
        ->hasTopics(5)//cuantos topics quiere que haga por cada factory de subject
        ->create();
    }
}
