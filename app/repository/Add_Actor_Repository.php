<?php


namespace App\repository;


use App\Add_Actor_Interface;
use App\Models\actor;

class Add_Actor_Repository implements Add_Actor_Interface
{
    private $model;

    public function __construct(actor $model)
    {
        $this->model = $model;
    }

    public function AddData($array)
    {
        $this->model->m_id = $array['m_id'];
        $this->model->ActorName = $array['ActorName'];
        $this->model->ActorBio = $array['ActorBio'];
        $this->model->ActorBirth = $array['ActorBirth'];
        return $this->model->save();
    }

   /* public function UpdateData($array)
    {
        $this->model = $this->model::find($id);
        $this->model->m_id = $array['m_id'];
        $this->model->ActorName = $array['ActorName'];
        $this->model->ActorBio = $array['ActorBio'];
        $this->model->ActorBirth = $array['ActorBirth'];
        return $this->model->save();

    }*/

}
