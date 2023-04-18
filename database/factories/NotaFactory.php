<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nota>
 */
class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //agregar id
        $topic=Topic::all()->random();
        return [
            //


            'anotaciones'=>fake()->paragraph(5),
            'palabrasClave'=>fake()->words(3, true),
            'resumen'=>fake()->paragraph(7),
            'topic_id'=>$topic
        ];
    }
}
