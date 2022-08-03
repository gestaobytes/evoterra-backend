<?php

namespace App\Observers;

use App\Models\About;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class AboutObserver
{
    
	public function creating(About $model) {
		$model->uuid = Str::uuid();
	}
	public function created(About $model) {
		Cache::forget('abouts');
	}
	public function updating(About $model) {
	}
	public function updated(About $model) {
		Cache::forget('abouts');
	}
	public function deleted(About $model) {
		Cache::forget('abouts');
	}
	public function restored(About $model) {
		Cache::forget('abouts');
	}
	public function forceDeleted(About $model) {
		Cache::forget('abouts');
	}
     
}
