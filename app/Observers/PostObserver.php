<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PostObserver
{
    
	public function creating(Post $model) {
		$model->uuid = Str::uuid();
		$model['slug'] = Str::slug($model['title'], '-');
	}
	public function created(Post $model) {
		Cache::forget('posts');
	}
	public function updating(Post $model) {
		$model['slug'] = Str::slug($model['title'], '-');
	}
	public function updated(Post $model) {
		Cache::forget('posts');
	}
	public function deleted(Post $model) {
		Cache::forget('posts');
	}
	public function restored(Post $model) {
		Cache::forget('posts');
	}
	public function forceDeleted(Post $model) {
		Cache::forget('posts');
	}
     
}
