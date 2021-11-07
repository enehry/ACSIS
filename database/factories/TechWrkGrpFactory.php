<?php

namespace Database\Factories;

use App\Models\TechWrkGrp;
use Illuminate\Database\Eloquent\Factories\Factory;

class TechWrkGrpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TechWrkGrp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => $this->faker->randomDigit(),
            'position' => $this->faker->text(20),
            'other_title' => $this->faker->text(20),
        ];
    }
}
