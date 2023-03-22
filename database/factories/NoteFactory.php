<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        //agregar id
        $topics=Topic::all()->ramdom();
        return [
            //


            'anotaciones'=>fake()->sentence(),
            'palabrasClave'=>fake()->sentence(),
            'resumen'=>fake()->sentence(),
            'topic_id'=>$topics
        ];
    }
}