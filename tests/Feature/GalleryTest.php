<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Gallery;

class GalleryTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexGallery()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/galleries')->assertOk();
    }

     public function testShowGallery()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/galleries/1')->assertOk();
    }

    public function testCreateGallery()
    {
        $user = User::get()->find(1);
        $data = [
            
			'type' => 'A',
			'title' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'exibetitle' => $this->faker->randomElement([0, 1]),
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/galleries', $data)->assertCreated();
    }

    public function testUpdateGallery()
    {
        $user = User::get()->find(1);
        $model = Gallery::get()->last();
        $data = [
            
			'type' => 'A',
			'title' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'exibetitle' => $this->faker->randomElement([0, 1]),
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/galleries/$model->id", $data)->assertOk();
    }

    public function testDeleteGallery()
    {
        $user = User::get()->find(1);
        $model = Gallery::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/galleries/$model->id")->assertOk();
    }

}
