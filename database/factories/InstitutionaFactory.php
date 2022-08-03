<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Institutiona;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class InstitutionaFactory extends Factory
{
    protected $model = Institutiona::class;

    public function definition()
    {
        return [
            
			'mission' => $this->faker->sentence,
			'vision' => $this->faker->sentence,
			'values' => $this->faker->sentence,
             
        ];

    }
}
