<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Portifolio;

class PortifolioTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexPortifolio()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/portifolios')->assertOk();
    }

     public function testShowPortifolio()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/portifolios/1')->assertOk();
    }

    public function testCreatePortifolio()
    {
        $user = User::get()->find(1);
        $data = [
            
			'clientname' => $this->faker->sentence,
			'titlework' => $this->faker->sentence,
			'work' => $this->faker->sentence,
			'link' => $this->faker->sentence,
			'resume' => $this->faker->sentence,
			'city' => $this->faker->sentence,
			'uf' => 'AB',
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/portifolios', $data)->assertCreated();
    }

    public function testUpdatePortifolio()
    {
        $user = User::get()->find(1);
        $model = Portifolio::get()->last();
        $data = [
            
			'clientname' => $this->faker->sentence,
			'titlework' => $this->faker->sentence,
			'work' => $this->faker->sentence,
			'link' => $this->faker->sentence,
			'resume' => $this->faker->sentence,
			'city' => $this->faker->sentence,
			'uf' => 'AB',
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/portifolios/$model->id", $data)->assertOk();
    }

    public function testDeletePortifolio()
    {
        $user = User::get()->find(1);
        $model = Portifolio::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/portifolios/$model->id")->assertOk();
    }

}
