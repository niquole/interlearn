<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quiz::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->name,
            'description'=> $this->faker->sentence(5),
            'option1'=> $this->faker->sentence(3),
            'option2'=> $this->faker->sentence(4),
            'option3'=> $this->faker->sentence(4),
            'option4'=> $this->faker->sentence(2),
            'selected' => 'option2', 
            'user_id'=> $this->faker->numberBetween(1, 50)
        ];
    }
}
