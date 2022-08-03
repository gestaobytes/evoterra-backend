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
			'image' => $this->faker->imageUrl(300, 300),
			'minibio' => $this->faker->sentence,
			'instagram' => $this->faker->sentence,
			'linkedin' => $this->faker->sentence,
			'facebook' => $this->faker->sentence,
			'twitter' => $this->faker->sentence,
			'email' => $this->faker->email,
			'cellphone' => $this->faker->cellphone,
             
        ];

    }
}
