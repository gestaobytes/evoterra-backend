<?php

namespace App\Observers;

use App\Models\Role;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class RoleObserver
{
    
	public function creating(Role $model) {
		$model->uuid = Str::uuid();
	}
	public function created(Role $model) {
		Cache::forget('roles');
	}
	public function updating(Role $model) {
	}
	public function updated(Role $model) {
		Cache::forget('roles');
	}
	public function deleted(Role $model) {
		Cache::forget('roles');
	}
	public function restored(Role $model) {
		Cache::forget('roles');
	}
	public function forceDeleted(Role $model) {
		Cache::forget('roles');
	}
     
}
