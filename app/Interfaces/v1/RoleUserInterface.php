<?php

namespace App\Interfaces\v1;

use App\Http\Requests\RoleUserRequest;

interface RoleUserInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function comboBox();
	public function store(RoleUserRequest $request);
	public function update(int $id, RoleUserRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
