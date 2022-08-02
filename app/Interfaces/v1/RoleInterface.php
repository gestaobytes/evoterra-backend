<?php

namespace App\Interfaces\v1;

use App\Http\Requests\RoleRequest;

interface RoleInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function comboBox();
	public function store(RoleRequest $request);
	public function update(int $id, RoleRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
