<?php

namespace App\Interfaces\v1;

use App\Http\Requests\GaleryRequest;

interface GaleryInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function store(GaleryRequest $request);
	public function update(int $id, GaleryRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
