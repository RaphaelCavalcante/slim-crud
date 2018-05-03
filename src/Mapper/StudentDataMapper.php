<?php

namespace App\Mapper;

use App\Model\StudentModel;

class StudentDataMapper 
{
    private $model;

    public function __contruct(StudentModel $model)
    {
        $this->model = $model;
    }

    public function findAll()
    {
        return $this->model::all();
    }
    public function findById(int $id)
    {       
        
        return $this->model::find($id);
    }
    public function create($studentData)
    {
        
        return  $this->model::create($studentData);;
    }
    public function edit($args, $data)
    {
        return $this->model::find($args['id'])
           ->update($data);;
    }

    public function delete($args)
    {
        $this->model::find($args[id]->delete());
    }

}