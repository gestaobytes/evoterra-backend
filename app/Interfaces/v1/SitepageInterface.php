<?php

namespace App\Interfaces\v1;

use App\Http\Requests\SitepageRequest;

interface SitepageInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function store(SitepageRequest $request);
	public function update(int $id, SitepageRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
