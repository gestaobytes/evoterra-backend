<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Institutiona;

class InstitutionaTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexInstitutiona()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/institutional')->assertOk();
    }

     public function testShowInstitutiona()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/institutional/1')->assertOk();
    }

    public function testCreateInstitutiona()
    {
        $user = User::get()->find(1);
        $data = [
            
			'mission' => $this->faker->sentence,
			'vision' => $this->faker->sentence,
			'values' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/institutional', $data)->assertCreated();
    }

    public function testUpdateInstitutiona()
    {
        $user = User::get()->find(1);
        $model = Institutiona::get()->last();
        $data = [
            
			'mission' => $this->faker->sentence,
			'vision' => $this->faker->sentence,
			'values' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/institutional/$model->id", $data)->assertOk();
    }

    public function testDeleteInstitutiona()
    {
        $user = User::get()->find(1);
        $model = Institutiona::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/institutional/$model->id")->assertOk();
    }

}
