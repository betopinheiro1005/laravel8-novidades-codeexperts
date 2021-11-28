<?php

namespace Database\Factories;

use \App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{

    // protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'items' => 'items-' . rand(1,100),
            'reference' => 'x-' . rand(1,100),
        ];
    }
}
