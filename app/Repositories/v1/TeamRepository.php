<?php

namespace App\Repositories\v1;

use App\Models\Team;
use App\Interfaces\v1\TeamInterface;
use App\Http\Controllers\v1\_ControlCommon;

class TeamRepository implements TeamInterface
{
    private $model, $commons;

    public function __construct(Team $model, _ControlCommon $commons) {
        $this->model = $model;
        $this->commons = $commons;
    }
    
	public function index()
	{
		$dateFilter = $this->commons->dateFilters();
		$registersPerPage = $this->commons->registersPerPage();
		$fieldsToSelect = $this->commons->fieldsToSelect('id,uuid,name,image,minibio,instagram,linkedin,facebook,twitter,email,cellphone');
		$sortByField = $this->commons->sortByField();
		$data = $this->model->select($fieldsToSelect)->whereBetween('created_at', [$dateFilter['dts'], $dateFilter['dtf']]);

		if(isset($_GET['q'])){
			$fieldsToSearch = isset($_GET['q']) ? $this->commons->keywordsToSearch('name') : '';
			$data->whereRaw("($fieldsToSearch)");
		}

		return $data->orderByRaw($sortByField)->paginate($registersPerPage);
	}

	public function show(int $id)
	{
		return $this->model->where('id', $id)->get();
	}

	public function details(int $id)
	{
		return $this->model->find($id);
	}

	public function store($request) {
		$dataForm = $request->all();
		return $this->model->create($dataForm);
	}

	public function update(int $id, $request) {
		$dataForm = $request->all();
		unset($dataForm['created_at'],$dataForm['updated_at'],$dataForm['deleted_at']);
		return $this->model->where('id', $id)->update($dataForm);
	}

	public function delete(int $id) {
		$model = $this->model->find($id);
		return $model->delete();
	}

	public function trash() {
		$model = $this->model->onlyTrashed()->get();
	}

	public function restore(int $id) {
		return $model = $this->model->withTrashed()->where('id', $id)->restore();
	}
     
}
