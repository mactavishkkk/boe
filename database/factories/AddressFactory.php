<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $states = ['AC', 'AL', 'AP'];

        $countys = [
            'Rio Branco', 'São Cruzeiro do Sul', 'Feijó',
            'Barreirinha', 'Boa Vista do Ramos', 'Careiro da Várzea',
            'Santana', 'Laranjal do Jari', 'Oiapoque'
        ];

        return [
            'state' => $this->faker->randomElement($states),
            'county' => $this->faker->randomElement($countys),
            'cep' => $this->faker->unique()->numerify('########'),
            'street' => $this->faker->sentence,
            'number' => $this->faker->unique()->numerify('###'),
            'district' => $this->faker->word,
            'complement' => $this->faker->sentence,
        ];
    }
}
