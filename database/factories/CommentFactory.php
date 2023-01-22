<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageableTypeArray = [Video::class,Post::class];
        return [
            //
            'imageable_type'=>fake()->randomElement($imageableTypeArray),
            'imageable_id'=>fake()->randomNumber(1,1000),
            'body'=>fake()->sentence
        ];
    }
}
