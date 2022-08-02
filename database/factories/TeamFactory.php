<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Team;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition()
    {
        return [
            
			'name' => $this->faker->name,
			'bio' => '',
			'linkedin' => $this->faker->sentence,
			'facebook' => $this->faker->sentence,
			'twitter' => $this->faker->sentence,
			'instagram' => $this->faker->sentence,
             
        ];

    }
}
