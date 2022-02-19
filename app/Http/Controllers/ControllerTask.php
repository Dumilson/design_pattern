<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class ControllerTask extends Controller
{
    private $serviceTask;

    public function __construct(TaskService $serviceTask){
        $this->serviceTask = $serviceTask;
    }
    public function getList(){
        return $this->getList();
    }
    public function store(Request $request){
        $data = $request->all();
        $this->serviceTask->store($data);
    }
    public function get($id){
        $this->serviceTask->get($id);
    }
    public function destroy($id){
        $this->serviceTask->destroy($id);
    }
    public function update(Request $request, $id){
        $data = $request->all();
        $this->serviceTask->update($data,$id);
    }
}
