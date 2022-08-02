<?php

namespace App\Interfaces\v1;

use App\Http\Requests\PostRequest;

interface PostInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function comboBox();
	public function store(PostRequest $request);
	public function update(int $id, PostRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
