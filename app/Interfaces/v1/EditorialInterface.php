<?php

namespace App\Interfaces\v1;

use App\Http\Requests\EditorialRequest;

interface EditorialInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function comboBox();
	public function store(EditorialRequest $request);
	public function update(int $id, EditorialRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
