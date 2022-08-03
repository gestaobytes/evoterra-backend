<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition()
    {
        return [
            
			'client' => $this->faker->sentence,
			'company' => $this->faker->sentence,
			'image' => $this->faker->imageUrl(300, 300),
			'text' => $this->faker->sentence,
             
        ];

    }
}
