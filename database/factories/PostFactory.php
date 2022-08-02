<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            
			'editorial_id' => 1,
			'intertitle' => $this->faker->word,
			'title' => $this->faker->sentence,
			'subtitle' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'text' => $this->faker->sentence,
			'tags' => $this->faker->word,
			'image' => $this->faker->imageUrl(300, 300),
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->sentence,
             
        ];

    }
}
