<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Sitepage;

class SitepageTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexSitepage()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/sitepages')->assertOk();
    }

     public function testShowSitepage()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/sitepages/1')->assertOk();
    }

    public function testCreateSitepage()
    {
        $user = User::get()->find(1);
        $data = [
            
			'title' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'text' => $this->faker->sentence,
			'tags' => $this->faker->word,
			'image' => $this->faker->imageUrl(300, 300),
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/sitepages', $data)->assertCreated();
    }

    public function testUpdateSitepage()
    {
        $user = User::get()->find(1);
        $model = Sitepage::get()->last();
        $data = [
            
			'title' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'text' => $this->faker->sentence,
			'tags' => $this->faker->word,
			'image' => $this->faker->imageUrl(300, 300),
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/sitepages/$model->id", $data)->assertOk();
    }

    public function testDeleteSitepage()
    {
        $user = User::get()->find(1);
        $model = Sitepage::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/sitepages/$model->id")->assertOk();
    }

}
