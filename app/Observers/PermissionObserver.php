<?php

namespace App\Observers;

use App\Models\Permission;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PermissionObserver
{
    
	public function creating(Permission $model) {
		$model->uuid = Str::uuid();
	}
	public function created(Permission $model) {
		Cache::forget('permissions');
	}
	public function updating(Permission $model) {
	}
	public function updated(Permission $model) {
		Cache::forget('permissions');
	}
	public function deleted(Permission $model) {
		Cache::forget('permissions');
	}
	public function restored(Permission $model) {
		Cache::forget('permissions');
	}
	public function forceDeleted(Permission $model) {
		Cache::forget('permissions');
	}
     
}
