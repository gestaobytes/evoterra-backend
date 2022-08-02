<?php

namespace App\Observers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class GalleryObserver
{
    
	public function creating(Gallery $model) {
		$model->uuid = Str::uuid();
		$model['slug'] = Str::slug($model['title'], '-');
	}
	public function created(Gallery $model) {
		Cache::forget('galleries');
	}
	public function updating(Gallery $model) {
		$model['slug'] = Str::slug($model['title'], '-');
	}
	public function updated(Gallery $model) {
		Cache::forget('galleries');
	}
	public function deleted(Gallery $model) {
		Cache::forget('galleries');
	}
	public function restored(Gallery $model) {
		Cache::forget('galleries');
	}
	public function forceDeleted(Gallery $model) {
		Cache::forget('galleries');
	}
     
}
