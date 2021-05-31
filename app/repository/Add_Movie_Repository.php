<?php


namespace App\repository;


use App\Add_Movie_Interface;
use App\Models\addmovie;


class Add_Movie_Repository implements Add_Movie_Interface {

    private $model;

    public function __construct(addmovie $model)
    {
        $this->model = $model;
    }
    public function AddData($array)
    {
        $this->model->MovieName = $array['MovieName'];
        $this->model->MoviePoster = $array['MoviePoster'];
        $this->model->MovieDescription = $array['MovieDescription'];
        $this->model->DirectorName = $array['DirectorName'];
        $this->model->Rate = $array['Rate'];

        return $this->model->save();
    }

 /*   public function UpdateData($array,$id)
    {
        $this->model = $this->model::find($id);
        $this->model->MovieName = $array['MovieName'];
        $this->model->MoviePoster = $array['MoviePoster'];
        $this->model->MovieDescription = $array['MovieDescription'];
        $this->model->DirectorName = $array['DirectorName'];
        $this->model->Rate = $array['Rate'];
        return $this->model->save();

    }*/
}
