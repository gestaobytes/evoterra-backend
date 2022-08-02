<?php

namespace App\Observers;

use App\Models\Editorial;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class EditorialObserver
{
    
	public function creating(Editorial $model) {
		$model->uuid = Str::uuid();
		$model['slug'] = Str::slug($model['name'], '-');
	}
	public function created(Editorial $model) {
		Cache::forget('editorials');
	}
	public function updating(Editorial $model) {
		$model['slug'] = Str::slug($model['name'], '-');
	}
	public function updated(Editorial $model) {
		Cache::forget('editorials');
	}
	public function deleted(Editorial $model) {
		Cache::forget('editorials');
	}
	public function restored(Editorial $model) {
		Cache::forget('editorials');
	}
	public function forceDeleted(Editorial $model) {
		Cache::forget('editorials');
	}
     
}
