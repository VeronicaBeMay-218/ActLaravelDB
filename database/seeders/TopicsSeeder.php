<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Subject;


use Illuminate\Supoort\Str;
use Illuminate\Supoort\Facades\DB;
use Illuminate\Supoort\Facades\Hash;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        //esta vacio xq es llamad a r¿travez de subject
        
        foreach($asignaturas as $asignaturas){

            Topic::actory()
            ->count($aasignatura['unidades'])
            ->for(subjct:factory()->state([
                "carrrera"=>$asignatura['ingenieria']
                "nombre"=>$asignatura['nombre']


            ])
            
            )
        }
    }
}
