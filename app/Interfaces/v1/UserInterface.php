<?php

namespace App\Interfaces\v1;

use App\Http\Requests\UserRequest;

interface UserInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function comboBox();
	public function store(UserRequest $request);
	public function update(int $id, UserRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
