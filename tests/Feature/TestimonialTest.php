<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Testimonial;

class TestimonialTest extends TestCase
{
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIndexTestimonial()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/testimonials')->assertOk();
    }

     public function testShowTestimonial()
    {
        $user = User::get()->find(1);
        $this->actingAs($user)->withSession(['banned' => false])->get('api/v1/testimonials/1')->assertOk();
    }

    public function testCreateTestimonial()
    {
        $user = User::get()->find(1);
        $data = [
            
			'client' => $this->faker->sentence,
			'company' => $this->faker->sentence,
			'image' => $this->faker->imageUrl(300, 300),
			'text' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->post('/api/v1/testimonials', $data)->assertCreated();
    }

    public function testUpdateTestimonial()
    {
        $user = User::get()->find(1);
        $model = Testimonial::get()->last();
        $data = [
            
			'client' => $this->faker->sentence,
			'company' => $this->faker->sentence,
			'image' => $this->faker->imageUrl(300, 300),
			'text' => $this->faker->sentence,
             
        ];
        $this->actingAs($user)->withSession(['banned' => false])->put("/api/v1/testimonials/$model->id", $data)->assertOk();
    }

    public function testDeleteTestimonial()
    {
        $user = User::get()->find(1);
        $model = Testimonial::get()->last();
        $this->actingAs($user)->withSession(['banned' => false])->delete("/api/v1/testimonials/$model->id")->assertOk();
    }

}
