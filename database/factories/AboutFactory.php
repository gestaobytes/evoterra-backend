<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\About;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class AboutFactory extends Factory
{
    protected $model = About::class;

    public function definition()
    {
        return [
            
			'title' => $this->faker->sentence,
			'image' => $this->faker->imageUrl(300, 300),
			'text' => $this->faker->sentence,
             
        ];

    }
}
