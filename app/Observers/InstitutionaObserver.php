<?php

namespace App\Observers;

use App\Models\Institutiona;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class InstitutionaObserver
{
    
	public function creating(Institutiona $model) {
		$model->uuid = Str::uuid();
	}
	public function created(Institutiona $model) {
		Cache::forget('institutional');
	}
	public function updating(Institutiona $model) {
	}
	public function updated(Institutiona $model) {
		Cache::forget('institutional');
	}
	public function deleted(Institutiona $model) {
		Cache::forget('institutional');
	}
	public function restored(Institutiona $model) {
		Cache::forget('institutional');
	}
	public function forceDeleted(Institutiona $model) {
		Cache::forget('institutional');
	}
     
}
