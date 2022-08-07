<?php

namespace Database\Factories;

use App\Models\Product;
use app\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promocode>
 */
class PromocodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => fake() -> uuid(),
            'value' => fake() ->randomNumber(),
            'expiration_date' => now()->addDays(3),
            'user_id' => User::all()->random()->id,
            'product_id' => Product::all()->random()->id
        ];
    }
}
