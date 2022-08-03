<?php

namespace App\Observers;

use App\Models\Galery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class GaleryObserver
{
    
	public function creating(Galery $model) {
		$model->uuid = Str::uuid();
	}
	public function created(Galery $model) {
		Cache::forget('galeries');
	}
	public function updating(Galery $model) {
	}
	public function updated(Galery $model) {
		Cache::forget('galeries');
	}
	public function deleted(Galery $model) {
		Cache::forget('galeries');
	}
	public function restored(Galery $model) {
		Cache::forget('galeries');
	}
	public function forceDeleted(Galery $model) {
		Cache::forget('galeries');
	}
     
}
