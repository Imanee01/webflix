<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(3),
            'synopsys'=>$this->faker->text(300),
            'duration'=> rand(100,200),
            'cover'=> $this ->faker->imageUrl(),
            'realeased_at'=>$this->faker->date, 


        ];
    }
}
