<?php

namespace App\Http\Controllers;

use App\add_bookTicket_interface;
use App\Models\book_movie_ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $AddBookTicketInterface;

    public function __construct(add_bookTicket_interface $AddBookTicketInterface)
    {
        $this->AddBookTicketInterface = $AddBookTicketInterface;
    }
    public function index()
    {
        $tickets= book_movie_ticket::get();
        return view('view_ticket_detail_by_admin')->with('tickets' , $tickets);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'addmovie_id' => 'required',
            'customer_id' => 'required',
            'TotalPerson' => 'required',
        ]);
        $array = [
            'addmovie_id' => $request->addmovie_id,
            'customer_id' => $request->customer_id,
            'TotalPerson' => $request->TotalPerson,
        ];
        $this->AddBookTicketInterface->AddData($array);
        return redirect('/ticketDetail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function display(Request $req){
        $tickets = book_movie_ticket::join('addmovies', 'addmovies.id', '=', 'book_movie_tickets.addmovie_id')
            ->join('customers', 'customers.id', '=', 'book_movie_tickets.customer_id')
            ->select('addmovies.MovieName','addmovies.MovieDescription','addmovies.DirectorName','addmovies.Rate','customers.name','customers.contact','customers.email','book_movie_tickets.TotalPerson')
            ->get();
        return view("view_book_movie_detail")->with('tickets' , $tickets);
    }
}
