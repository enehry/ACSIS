<?php

namespace Database\Factories;

use App\Models\Meeting;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'fname' => $this->faker->name(),
            'who' => $this->faker->name(),
            'what' => $this->faker->text(),
            'where' => $this->faker->address(),
            'when' => $this->faker->date(),
            'why' => $this->faker->randomAscii(),
            'description' => $this->faker->text(),
            'how' => $this->faker->text(),
            'user_id' => $this->faker->randomDigit(),
        ];
    }
}
