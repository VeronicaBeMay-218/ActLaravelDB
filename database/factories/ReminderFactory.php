<?php

namespace Database\Factories;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reminder>
 */
class ReminderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $subject=Subject::all()->random();
        return [
            //
          //subject
            'mensaje'=>fake()->sentence(),
            'categoria'=>fake()->randomElement(['examen','nd','iem','ii','ie']),
            'importancia'=>fake()->numberBetween(1,5),
            'fecha'=>fake()->dateTimeBetween('-5 week', '+7 week'),
            'destacado'=>fake()->numberBetween(1,2),
            'completado'=>fake()->numberBetween(1,2),
            'subject_id'=>$subject
        ];
    }

    
}
