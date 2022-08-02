<?php

namespace App\Observers;

use App\Models\PermissionRole;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PermissionRoleObserver
{
    
	public function creating(PermissionRole $model) {
		$model->uuid = Str::uuid();
	}
	public function created(PermissionRole $model) {
		Cache::forget('permission_role');
	}
	public function updating(PermissionRole $model) {
	}
	public function updated(PermissionRole $model) {
		Cache::forget('permission_role');
	}
	public function deleted(PermissionRole $model) {
		Cache::forget('permission_role');
	}
	public function restored(PermissionRole $model) {
		Cache::forget('permission_role');
	}
	public function forceDeleted(PermissionRole $model) {
		Cache::forget('permission_role');
	}
     
}
