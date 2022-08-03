<?php

namespace App\Observers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class TestimonialObserver
{
    
	public function creating(Testimonial $model) {
		$model->uuid = Str::uuid();
	}
	public function created(Testimonial $model) {
		Cache::forget('testimonials');
	}
	public function updating(Testimonial $model) {
	}
	public function updated(Testimonial $model) {
		Cache::forget('testimonials');
	}
	public function deleted(Testimonial $model) {
		Cache::forget('testimonials');
	}
	public function restored(Testimonial $model) {
		Cache::forget('testimonials');
	}
	public function forceDeleted(Testimonial $model) {
		Cache::forget('testimonials');
	}
     
}
