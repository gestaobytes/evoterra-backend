<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Editorial;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class EditorialFactory extends Factory
{
    protected $model = Editorial::class;

    public function definition()
    {
        return [
            
			'name' => $this->faker->name,
			'slug' => $this->faker->slug,
			'order' => $this->faker->numberBetween(1, 100),
             
        ];

    }
}
