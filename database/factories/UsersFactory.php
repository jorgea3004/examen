<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Users::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'salary' => $this->faker->randomFloat(2, 5000.00, 10000.00),
            'charge' => $this->faker->randomElement([1,2,3,4,5,6]),
            'status' => $this->faker->randomElement([0,1,2]),
            'password' => 'admin'
        ];
    }
}
