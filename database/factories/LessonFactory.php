<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(3),
            'description'=> $this->faker->sentence(7),
            'content' => $this->faker->sentence(20),
            'user_id'=> $this->faker->numberBetween(1, 50)
        ];
    }
}
