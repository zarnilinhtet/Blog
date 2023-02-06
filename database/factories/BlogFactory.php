<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'=>Category::factory(),
            'title'=>$this->faker->sentence(),
            'intro'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'body'=>$this->faker->paragraph(),
            'user_id'=>User::factory(),
        ];
    }
}
