<?php


namespace App\repository;


use App\add_bookTicket_interface;
use App\Models\book_movie_ticket;

class Add_BookTicket_Repository implements add_bookTicket_interface
{
    private $model;

    public function __construct(book_movie_ticket $model)
    {
        $this->model = $model;
    }
    public function AddData($array)
    {
        $this->model->addmovie_id = $array['addmovie_id'];
        $this->model->customer_id = $array['customer_id'];
        $this->model->TotalPerson = $array['TotalPerson'];

        return $this->model->save();
    }
}

