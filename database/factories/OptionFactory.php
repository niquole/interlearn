<?php

namespace Database\Factories;

use App\Models\Option;
use Illuminate\Database\Eloquent\Factories\Factory;

class OptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'choice'=> $this->faker->sentence(5),
            'correct'=> $this->faker->boolean,
            'question_id'=> $this->faker->numberBetween(0, 140)
        ];
    }
}
