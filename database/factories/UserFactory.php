<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\es_ES\Person($this->faker));
        $this->faker->addProvider(new \Faker\Provider\es_ES\PhoneNumber($this->faker));
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'dni' => $this->faker->dni,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->tollFreeNumber,
            'role' => $this->faker->randomElement(['admin', 'user']),
            'password' => Hash::make('1234'),
            'remember_token' => Str::random(10),
        ];
    }
}
