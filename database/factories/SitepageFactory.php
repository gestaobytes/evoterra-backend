<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Sitepage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class SitepageFactory extends Factory
{
    protected $model = Sitepage::class;

    public function definition()
    {
        return [
            
			'title' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'text' => $this->faker->sentence,
			'tags' => $this->faker->word,
			'image' => $this->faker->imageUrl(300, 300),
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->sentence,
             
        ];

    }
}
