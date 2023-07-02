<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\MaritalStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Masculino, Feminino, Outro e Não Informado
        $gender = ['M', 'F', 'O', 'N/I'];

        return [
            'marital_status_id' => MaritalStatus::All()->random()->id,
            'address_id' => Address::all()->random()->id,
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement($gender),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'date_birth' => $this->faker->date()
        ];
    }
}
