<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Editorial;

class EditorialTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexEditorial()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/editorials')->assertOk();
    }

     public function testShowEditorial()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/editorials/1')->assertOk();
    }

    public function testCreateEditorial()
    {
        $user = User::get()->find(1);
        $data = [
            
			'name' => $this->faker->name,
			'slug' => $this->faker->slug,
			'order' => $this->faker->numberBetween(1, 100),
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/editorials', $data)->assertCreated();
    }

    public function testUpdateEditorial()
    {
        $user = User::get()->find(1);
        $model = Editorial::get()->last();
        $data = [
            
			'name' => $this->faker->name,
			'slug' => $this->faker->slug,
			'order' => $this->faker->numberBetween(1, 100),
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/editorials/$model->id", $data)->assertOk();
    }

    public function testDeleteEditorial()
    {
        $user = User::get()->find(1);
        $model = Editorial::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/editorials/$model->id")->assertOk();
    }

}
