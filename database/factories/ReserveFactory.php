<?php

namespace Database\Factories;

use App\Models\Reserve;
use App\Models\Turn;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReserveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reserve::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'turn_id' => Turn::all()->random()->id,
        ];
    }
}
