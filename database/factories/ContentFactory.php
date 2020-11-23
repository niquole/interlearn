<?php

namespace Database\Factories;

use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Content::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content'=> $this->faker->sentence(10),
            'img'=> $this->faker->sentence(1),
            'lesson_id'=> $this->faker->numberBetween(1, 80)
        ];
    }
}
