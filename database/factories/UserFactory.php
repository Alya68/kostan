<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> 98021bc (halaman semua kos)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
=======
>>>>>>> 98021bc (halaman semua kos)
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
=======
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
>>>>>>> 98021bc (halaman semua kos)
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
<<<<<<< HEAD
=======

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
>>>>>>> 98021bc (halaman semua kos)
}
