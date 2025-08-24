<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'=>1,
            'news_title'=>implode(',',fake()->words()),
            'news_short_description'=>fake()->sentence(),
            'news_long_description'=>fake()->paragraph(4),
            'new_image'=>'egadget.png',
            'news_status'=>'draft',
            'views_count'=>fake()->numberBetween(10,3000),
            'author_name'=>'AI',


        ];
    }
}
