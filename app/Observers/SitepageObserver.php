<?php

namespace App\Observers;

use App\Models\Sitepage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class SitepageObserver
{
    
	public function creating(Sitepage $model) {
		$model->uuid = Str::uuid();
		$model['slug'] = Str::slug($model['title'], '-');
	}
	public function created(Sitepage $model) {
		Cache::forget('sitepages');
	}
	public function updating(Sitepage $model) {
		$model['slug'] = Str::slug($model['title'], '-');
	}
	public function updated(Sitepage $model) {
		Cache::forget('sitepages');
	}
	public function deleted(Sitepage $model) {
		Cache::forget('sitepages');
	}
	public function restored(Sitepage $model) {
		Cache::forget('sitepages');
	}
	public function forceDeleted(Sitepage $model) {
		Cache::forget('sitepages');
	}
     
}
