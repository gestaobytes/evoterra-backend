<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Team;

class TeamTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexTeam()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/teams')->assertOk();
    }

     public function testShowTeam()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/teams/1')->assertOk();
    }

    public function testCreateTeam()
    {
        $user = User::get()->find(1);
        $data = [
            
			'name' => $this->faker->name,
			'image' => $this->faker->imageUrl(300, 300),
			'minibio' => $this->faker->sentence,
			'instagram' => $this->faker->sentence,
			'linkedin' => $this->faker->sentence,
			'facebook' => $this->faker->sentence,
			'twitter' => $this->faker->sentence,
			'email' => $this->faker->email,
			'cellphone' => $this->faker->cellphone,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/teams', $data)->assertCreated();
    }

    public function testUpdateTeam()
    {
        $user = User::get()->find(1);
        $model = Team::get()->last();
        $data = [
            
			'name' => $this->faker->name,
			'image' => $this->faker->imageUrl(300, 300),
			'minibio' => $this->faker->sentence,
			'instagram' => $this->faker->sentence,
			'linkedin' => $this->faker->sentence,
			'facebook' => $this->faker->sentence,
			'twitter' => $this->faker->sentence,
			'email' => $this->faker->email,
			'cellphone' => $this->faker->cellphone,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/teams/$model->id", $data)->assertOk();
    }

    public function testDeleteTeam()
    {
        $user = User::get()->find(1);
        $model = Team::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/teams/$model->id")->assertOk();
    }

}
