<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Itemsgallery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ItemsgalleryFactory extends Factory
{
    protected $model = Itemsgallery::class;

    public function definition()
    {
        return [
            
			'gallery_id' => 1,
			'src' => $this->faker->imageUrl(300, 300),
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->sentence,
             
        ];

    }
}
