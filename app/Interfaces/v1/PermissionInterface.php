<?php

namespace App\Interfaces\v1;

use App\Http\Requests\PermissionRequest;

interface PermissionInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function comboBox();
	public function store(PermissionRequest $request);
	public function update(int $id, PermissionRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
