<?php

namespace App\Observers;

use App\Models\Team;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class TeamObserver
{
    
	public function creating(Team $model) {
		$model->uuid = Str::uuid();
	}
	public function created(Team $model) {
		Cache::forget('teams');
	}
	public function updating(Team $model) {
	}
	public function updated(Team $model) {
		Cache::forget('teams');
	}
	public function deleted(Team $model) {
		Cache::forget('teams');
	}
	public function restored(Team $model) {
		Cache::forget('teams');
	}
	public function forceDeleted(Team $model) {
		Cache::forget('teams');
	}
     
}
