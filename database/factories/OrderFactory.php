<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'email' => (isset($user->email) ? $user->email : ''),
            'phone' => (isset($user->phone) ? $user->phone : ''),
            'status' => rand(0, 1),

        ];
    }
}
