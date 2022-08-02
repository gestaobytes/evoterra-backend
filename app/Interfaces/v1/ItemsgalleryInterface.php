<?php

namespace App\Interfaces\v1;

use App\Http\Requests\ItemsgalleryRequest;

interface ItemsgalleryInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function store(ItemsgalleryRequest $request);
	public function update(int $id, ItemsgalleryRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
