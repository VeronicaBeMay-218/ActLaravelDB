<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $nombre=fake()->firstName();
        $apellidos=fake()->lastName(); 
        //$nombre.'.' .$apellidos.'@itsmotul.edu.mx';


        return [//datos de la tabla usuarios
            'name' => $nombre,
            'last_name' => $apellidos,
            'email' => $nombre.'.'.$apellidos.'@itsmotul.edu.mx',
            'matricula'=>fake()->bothify('???-####'),
            'ing'=>fake()->randomElement(['isc','ier','iem','ii','ie']),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
