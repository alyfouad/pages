<?php

namespace App\Repository\Eloquent;

use App\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
	protected $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	} // end __construct


	public function all()
	{
		return $this->model->all();
	} // end all

	public function find($id)
	{
		return $this->model->find($id);
	} // end find

	public function findOrFail($id)
	{
		return $this->model->findOrFail($id);
	} // end findOrFail

	public function show($cond)
	{
		return $this->model->where($cond)->first();
	} // end show

	public function create($data)
	{
		return $this->model->create($data);
	} // end create

	public function updateOrCreate($cond, $data)
	{
		return $this->model->updateOrCreate($cond, $data);
	} // end updateOrCreate

	public function update($cond, $data)
	{
		return $this->model->where($cond)->update($data);
	} // end update

	public function delete($cond)
	{
		return $this->model->where($cond)->delete();
	} // end delete

	public function restore($cond)
	{
		return $this->model->onlyTrashed()->where($cond)->restore();
	} // end restore


}
