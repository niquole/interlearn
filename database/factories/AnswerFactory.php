<?php

namespace Database\Factories;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
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
            'is_correct'=> $this->faker->boolean,
            'question_id'=> $this->faker->numberBetween(0, 140),
            'user_id'=> $this->faker->numberBetween(0, 50),

        ];
    }
}
