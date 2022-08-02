<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Role;

class RoleTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexRole()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/roles')->assertOk();
    }

     public function testShowRole()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/roles/1')->assertOk();
    }

    public function testCreateRole()
    {
        $user = User::get()->find(1);
        $data = [
            
			'name' => $this->faker->name,
			'description' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/roles', $data)->assertCreated();
    }

    public function testUpdateRole()
    {
        $user = User::get()->find(1);
        $model = Role::get()->last();
        $data = [
            
			'name' => $this->faker->name,
			'description' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/roles/$model->id", $data)->assertOk();
    }

    public function testDeleteRole()
    {
        $user = User::get()->find(1);
        $model = Role::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/roles/$model->id")->assertOk();
    }

}
