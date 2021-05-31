<?php


namespace App\repository;


use App\AdminDataInterface;
use App\Models\admin;

class AdminDataRepository implements AdminDataInterface
{
    private $model;

    public function __construct(admin $model)
    {
        $this->model = $model;
    }
    public function PostAdminData($array)
    {
        // TODO: Implement PostData() method.
        $this->model->name = $array['name'];
        $this->model->contact = $array['contact'];
        $this->model->email = $array['email'];
        $this->model->password = $array['password'];
        return $this->model->save();

    }


}
