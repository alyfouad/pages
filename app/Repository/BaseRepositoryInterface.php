<?php

namespace App\Repository;
interface BaseRepositoryInterface
{
    public function all();
    public function create($data);
    public function find($id);
    public function show($cond);
    public function findOrFail($id);
    public function updateOrCreate($cond,$data);
    public function update($cond,$data);
    public function delete($cond);
    public function restore($cond);
}
