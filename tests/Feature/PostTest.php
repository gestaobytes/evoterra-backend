<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Post;

class PostTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexPost()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/posts')->assertOk();
    }

     public function testShowPost()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/posts/1')->assertOk();
    }

    public function testCreatePost()
    {
        $user = User::get()->find(1);
        $data = [
            
			'editorial_id' => 1,
			'intertitle' => $this->faker->word,
			'title' => $this->faker->sentence,
			'subtitle' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'text' => $this->faker->sentence,
			'tags' => $this->faker->word,
			'image' => $this->faker->imageUrl(300, 300),
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/posts', $data)->assertCreated();
    }

    public function testUpdatePost()
    {
        $user = User::get()->find(1);
        $model = Post::get()->last();
        $data = [
            
			'editorial_id' => 1,
			'intertitle' => $this->faker->word,
			'title' => $this->faker->sentence,
			'subtitle' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'text' => $this->faker->sentence,
			'tags' => $this->faker->word,
			'image' => $this->faker->imageUrl(300, 300),
			'legend' => $this->faker->sentence,
			'credit' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/posts/$model->id", $data)->assertOk();
    }

    public function testDeletePost()
    {
        $user = User::get()->find(1);
        $model = Post::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/posts/$model->id")->assertOk();
    }

}
