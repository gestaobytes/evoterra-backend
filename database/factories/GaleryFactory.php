<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Galery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class GaleryFactory extends Factory
{
    protected $model = Galery::class;

    public function definition()
    {
        return [
            
			'name' => $this->faker->name,
			'type' => ,
             
        ];

    }
}
