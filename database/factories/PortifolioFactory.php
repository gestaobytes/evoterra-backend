<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Portifolio;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PortifolioFactory extends Factory
{
    protected $model = Portifolio::class;

    public function definition()
    {
        return [
            
			'clientname' => $this->faker->sentence,
			'titlework' => $this->faker->sentence,
			'work' => $this->faker->sentence,
			'link' => $this->faker->sentence,
			'resume' => $this->faker->sentence,
			'city' => $this->faker->sentence,
			'uf' => 'AB',
             
        ];

    }
}
