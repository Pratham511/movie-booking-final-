<?php


namespace App\repository;


use App\Models\theatre;
use App\Add_Theatre_Interface;

class Add_Theatre_Repository implements Add_Theatre_Interface
{
    private $model;

    public function __construct(theatre $model)
    {
        $this->model = $model;
    }
    public function AddData($array)
    {
        $this->model->TheatreName = $array['TheatreName'];
        $this->model->TheatreCity = $array['TheatreCity'];
        $this->model->RunTime = $array['RunTime'];
        $this->model->addmovie_id = $array['addmovie_id'];


        return $this->model->save();
    }
}
