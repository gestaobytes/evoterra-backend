<?php

namespace App\Interfaces\v1;

use App\Http\Requests\GalleryRequest;

interface GalleryInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function store(GalleryRequest $request);
	public function update(int $id, GalleryRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
