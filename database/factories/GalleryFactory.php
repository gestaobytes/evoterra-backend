<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Gallery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class GalleryFactory extends Factory
{
    protected $model = Gallery::class;

    public function definition()
    {
        return [
            
			'type' => 'A',
			'title' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'exibetitle' => $this->faker->randomElement([0, 1]),
             
        ];

    }
}
