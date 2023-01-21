<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    private $imageableTypeArray = [User::class,Post::class];
    private $imageableIdArray = [1,2,3];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'url'=>$this->faker->url,
            'imageable_type'=>$this->faker->randomElement($this->imageableTypeArray),
            'imageable_id'=>$this->faker->randomElement($this->imageableIdArray)
        ];
    }
}
