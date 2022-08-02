<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Interfaces\v1\SitepageInterface;
use App\Http\Requests\SitepageRequest;
use App\Http\Controllers\v1\_ControlCommon;

class SitepageController extends Controller {
    private $interface, $commons, $gate;

    public function __construct(SitepageInterface $interface, _ControlCommon $commons) {
        $this->interface = $interface;
        $this->commons = $commons;
        $this->gate = 'sitepages';
    }
    

	public function index()
	{
		$this->commons->userAuthorization($this->gate);
		return $this->interface->index();
	}

	public function show(int $id)
	{
		$this->commons->userAuthorization($this->gate);
		return $this->interface->show($id);
	}

	public function details(int $id)
	{
		$this->commons->userAuthorization($this->gate);
		return $this->interface->details($id);
	}

	public function store(SitepageRequest $request)
	{
		$this->commons->userAuthorization($this->gate);
		return $this->interface->store($request);
	}

	public function update(int $id, SitepageRequest $request)
	{
		$this->commons->userAuthorization($this->gate);
		return $this->interface->update($id, $request);
	}

	public function delete(int $id)
	{
		$this->commons->userAuthorization($this->gate);
		return $this->interface->delete($id);
	}

	public function trash()
	{
		$this->commons->userAuthorization($this->gate);
		return $this->interface->trash();
	}

	public function restore(int $id)
	{
		$this->commons->userAuthorization($this->gate);
		return $this->interface->restore($id);
	}
     
}
