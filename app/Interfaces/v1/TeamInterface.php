<?php

namespace App\Interfaces\v1;

use App\Http\Requests\TeamRequest;

interface TeamInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function store(TeamRequest $request);
	public function update(int $id, TeamRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
