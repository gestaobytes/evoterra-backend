<?php

namespace App\Interfaces\v1;

use App\Http\Requests\AboutRequest;

interface AboutInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function comboBox();
	public function store(AboutRequest $request);
	public function update(int $id, AboutRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
