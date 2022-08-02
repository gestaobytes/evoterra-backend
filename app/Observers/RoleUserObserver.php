<?php

namespace App\Observers;

use App\Models\RoleUser;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class RoleUserObserver
{
    
	public function creating(RoleUser $model) {
		$model->uuid = Str::uuid();
	}
	public function created(RoleUser $model) {
		Cache::forget('role_user');
	}
	public function updating(RoleUser $model) {
	}
	public function updated(RoleUser $model) {
		Cache::forget('role_user');
	}
	public function deleted(RoleUser $model) {
		Cache::forget('role_user');
	}
	public function restored(RoleUser $model) {
		Cache::forget('role_user');
	}
	public function forceDeleted(RoleUser $model) {
		Cache::forget('role_user');
	}
     
}
