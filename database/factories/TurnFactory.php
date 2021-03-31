<?php

namespace Database\Factories;

use App\Models\Turn;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Prophecy\Call\Call;

class TurnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Turn::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start_at = $this->faker->time($format = "H:i");
        return [
            'date' => Carbon::createFromTimestamp($this->faker->dateTimeBetween($startDate = '+0 days', $endDate = '+1 week')->getTimeStamp()),
            'start_at' => $start_at,
            'finish_at' => $this->faker->time($format = "H:i" ,$min = $start_at) ,
            'count' => $this->faker->numberBetween(1,10),
            
        ];
    }
}
