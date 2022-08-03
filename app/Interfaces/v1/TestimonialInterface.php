<?php

namespace App\Interfaces\v1;

use App\Http\Requests\TestimonialRequest;

interface TestimonialInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function store(TestimonialRequest $request);
	public function update(int $id, TestimonialRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
