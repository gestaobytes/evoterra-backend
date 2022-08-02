<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Permission;

class PermissionTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexPermission()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/permissions')->assertOk();
    }

     public function testShowPermission()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/permissions/1')->assertOk();
    }

    public function testCreatePermission()
    {
        $user = User::get()->find(1);
        $data = [
            
			'name' => $this->faker->name,
			'description' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/permissions', $data)->assertCreated();
    }

    public function testUpdatePermission()
    {
        $user = User::get()->find(1);
        $model = Permission::get()->last();
        $data = [
            
			'name' => $this->faker->name,
			'description' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/permissions/$model->id", $data)->assertOk();
    }

    public function testDeletePermission()
    {
        $user = User::get()->find(1);
        $model = Permission::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/permissions/$model->id")->assertOk();
    }

}
