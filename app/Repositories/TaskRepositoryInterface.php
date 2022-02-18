<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface TaskRepositoryInterface{

    public function __construct(Model $model);
    public function getList();
    public function store(Array $data);
    public function get($id);
    public function destroy($id);
    public function update(Array $data, $id);
}