<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Permission;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PermissionFactory extends Factory
{
    protected $model = Permission::class;

    public function definition()
    {
        return [
            
			'name' => $this->faker->name,
			'description' => $this->faker->sentence,
             
        ];

    }
}
