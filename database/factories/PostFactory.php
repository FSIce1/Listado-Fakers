<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    
    protected $model = Post::class;

    
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->text(1600),
        ];
    }
}
