<?php

namespace App\Observers;

use App\Models\Portifolio;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PortifolioObserver
{
    
	public function creating(Portifolio $model) {
		$model->uuid = Str::uuid();
	}
	public function created(Portifolio $model) {
		Cache::forget('portifolios');
	}
	public function updating(Portifolio $model) {
	}
	public function updated(Portifolio $model) {
		Cache::forget('portifolios');
	}
	public function deleted(Portifolio $model) {
		Cache::forget('portifolios');
	}
	public function restored(Portifolio $model) {
		Cache::forget('portifolios');
	}
	public function forceDeleted(Portifolio $model) {
		Cache::forget('portifolios');
	}
     
}
