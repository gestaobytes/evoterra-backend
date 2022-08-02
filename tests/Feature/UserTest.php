<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\User;

class UserTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexUser()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/users')->assertOk();
    }

     public function testShowUser()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/users/1')->assertOk();
    }

    public function testCreateUser()
    {
        $user = User::get()->find(1);
        $data = [
            
			'fullname' => $this->faker->word,
			'email' => $this->faker->email,
			'status' => $this->faker->boolean,
			'password' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/users', $data)->assertCreated();
    }

    public function testUpdateUser()
    {
        $user = User::get()->find(1);
        $model = User::get()->last();
        $data = [
            
			'fullname' => $this->faker->word,
			'email' => $this->faker->email,
			'status' => $this->faker->boolean,
			'password' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/users/$model->id", $data)->assertOk();
    }

    public function testDeleteUser()
    {
        $user = User::get()->find(1);
        $model = User::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/users/$model->id")->assertOk();
    }

}
