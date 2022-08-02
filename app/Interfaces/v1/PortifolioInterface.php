<?php

namespace App\Interfaces\v1;

use App\Http\Requests\PortifolioRequest;

interface PortifolioInterface {
    
	public function index();
	public function show(int $id);
	public function details(int $id);
	public function store(PortifolioRequest $request);
	public function update(int $id, PortifolioRequest $request);
	public function delete(int $id);
	public function trash();
	public function restore(int $id);
     
}
