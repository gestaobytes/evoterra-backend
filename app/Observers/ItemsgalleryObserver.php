<?php

namespace App\Observers;

use App\Models\Itemsgallery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ItemsgalleryObserver
{
    
	public function creating(Itemsgallery $model) {
		$model->uuid = Str::uuid();
	}
	public function created(Itemsgallery $model) {
		Cache::forget('itemsgalleries');
	}
	public function updating(Itemsgallery $model) {
	}
	public function updated(Itemsgallery $model) {
		Cache::forget('itemsgalleries');
	}
	public function deleted(Itemsgallery $model) {
		Cache::forget('itemsgalleries');
	}
	public function restored(Itemsgallery $model) {
		Cache::forget('itemsgalleries');
	}
	public function forceDeleted(Itemsgallery $model) {
		Cache::forget('itemsgalleries');
	}
     
}
