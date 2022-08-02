<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Role;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition()
    {
        return [
            
			'name' => $this->faker->name,
			'description' => $this->faker->sentence,
             
        ];

    }
}
