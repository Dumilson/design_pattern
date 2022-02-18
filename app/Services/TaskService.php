<?php 
namespace App\Services;

use App\Repositories\TaskRepositoryInterface;

class TaskService {
    private $repo;

    public function __construct(TaskRepositoryInterface $repo){
        $this->repo = $repo;
    }
    public function getList(){
        return $this->getList();
    }
    public function store(Array $data){
        $this->repo->store($data);
    }
    public function get($id){
        $this->repo->get($id);
    }
    public function destroy($id){
        $this->repo->destroy($id);
    }
    public function update(Array $data, $id){
        $this->repo->update($data,$id);
    }
}