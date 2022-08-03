<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Galery;

class GaleryTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexGalery()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/galeries')->assertOk();
    }

     public function testShowGalery()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/galeries/1')->assertOk();
    }

    public function testCreateGalery()
    {
        $user = User::get()->find(1);
        $data = [
            
			'name' => $this->faker->name,
			'type' => ,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/galeries', $data)->assertCreated();
    }

    public function testUpdateGalery()
    {
        $user = User::get()->find(1);
        $model = Galery::get()->last();
        $data = [
            
			'name' => $this->faker->name,
			'type' => ,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/galeries/$model->id", $data)->assertOk();
    }

    public function testDeleteGalery()
    {
        $user = User::get()->find(1);
        $model = Galery::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/galeries/$model->id")->assertOk();
    }

}
