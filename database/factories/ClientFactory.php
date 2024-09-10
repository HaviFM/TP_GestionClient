<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
            'civilite' => $this->faker->randomElement(['Monsieur', 'Madame']),
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'tel' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
