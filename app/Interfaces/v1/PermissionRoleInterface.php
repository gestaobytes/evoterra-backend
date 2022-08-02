<?php

namespace App\Interfaces\v1;

use App\Http\Requests\PermissionRoleRequest;

interface PermissionRoleInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function comboBox();
	public function store(PermissionRoleRequest $request);
	public function update(int $id, PermissionRoleRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
