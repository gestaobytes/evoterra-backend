<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Itemsgallery;

class ItemsgalleryTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexItemsgallery()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/itemsgalleries')->assertOk();
    }

     public function testShowItemsgallery()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/itemsgalleries/1')->assertOk();
    }

    public function testCreateItemsgallery()
    {
        $user = User::get()->find(1);
        $data = [
            
			'gallery_id' => 1,
			'name' => $this->faker->name,
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->word,
			'address' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/itemsgalleries', $data)->assertCreated();
    }

    public function testUpdateItemsgallery()
    {
        $user = User::get()->find(1);
        $model = Itemsgallery::get()->last();
        $data = [
            
			'gallery_id' => 1,
			'name' => $this->faker->name,
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->word,
			'address' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/itemsgalleries/$model->id", $data)->assertOk();
    }

    public function testDeleteItemsgallery()
    {
        $user = User::get()->find(1);
        $model = Itemsgallery::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/itemsgalleries/$model->id")->assertOk();
    }

}
