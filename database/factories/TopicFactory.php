<?php

namespace Database\Factories;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
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
                //
                'unidad'=>fake()->randomDigitNot([0,7,8,9]),
                'tema'=>fake()->sentence(),
                'subtema'=>fake()->sentence(),
                'subject_id'=>$subject
           
        ];
    }
}
