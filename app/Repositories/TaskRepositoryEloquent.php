<?php 
namespace App\Repositories;

use App\Models\Task;

class TaskRepositoryEloquent implements TaskRepositoryInterface{

    protected $model;
    public function __construct(Task $model){
        $this->model = $model;
    }
    public function getList(){
        return $this->model->all();
    }
    public function store(Array $data){
        $this->model->insert($data);
    }
    public function get($id){
        $this->model->find($id);
    }
    public function destroy($id){
        $this->model->find($id)->delete();
    }
    public function update(Array $data, $id){
        $this->model->find($id)->update($data);
    }

}