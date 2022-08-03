<?php

namespace App\Interfaces\v1;

use App\Http\Requests\InstitutionaRequest;

interface InstitutionaInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function store(InstitutionaRequest $request);
	public function update(int $id, InstitutionaRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
