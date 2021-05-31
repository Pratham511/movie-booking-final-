<?php


namespace App\repository;


use App\Models\customer;
use App\CustomerDataInterface;

class CustomerDataRepository implements CustomerDataInterface
{
    private $model;

    public function __construct(customer $model)
    {
        $this->model = $model;
    }

    public function PostData($array)
    {
        // TODO: Implement PostData() method.
        $this->model->name = $array['name'];
        $this->model->contact = $array['contact'];
        $this->model->email = $array['email'];
        $this->model->password = $array['password'];
        return $this->model->save();

    }
}
