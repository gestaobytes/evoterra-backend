<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\About;

class AboutTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexAbout()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/abouts')->assertOk();
    }

     public function testShowAbout()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/abouts/1')->assertOk();
    }

    public function testCreateAbout()
    {
        $user = User::get()->find(1);
        $data = [
            
			'title' => $this->faker->sentence,
			'image' => $this->faker->imageUrl(300, 300),
			'text' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/abouts', $data)->assertCreated();
    }

    public function testUpdateAbout()
    {
        $user = User::get()->find(1);
        $model = About::get()->last();
        $data = [
            
			'title' => $this->faker->sentence,
			'image' => $this->faker->imageUrl(300, 300),
			'text' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/abouts/$model->id", $data)->assertOk();
    }

    public function testDeleteAbout()
    {
        $user = User::get()->find(1);
        $model = About::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/abouts/$model->id")->assertOk();
    }

}
