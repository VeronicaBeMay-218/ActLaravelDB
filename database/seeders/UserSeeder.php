<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Supoort\Str;
use Illuminate\Supoort\Facades\DB;
use Illuminate\Supoort\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //INSERTA UN REGISTRO
       /* $user = User::factory()->create();*/

      /* DB::table('users')->insert([
        'name'=>Str::random(10),
        'email'=>Str::random(10) . '@gmail.com',
        'password'=>Hash::make('password'),

       ]);*/

//INSERTAR 50 REGISTROS
        User::factory()
        ->count(50)
        //->hasPost(1)
        ->create();
    }
}
