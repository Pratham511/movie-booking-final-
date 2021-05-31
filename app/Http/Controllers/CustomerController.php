<?php

namespace App\Http\Controllers;

use App\Events\eventregister;
use App\Models\book_movie_ticket;
use App\Models\theatre;
use Illuminate\Support\Facades\DB;
use App\Models\addmovie;
use App\Models\customer;
use App\CustomerDataInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    //crete interface object
    private $interface;

    public function __construct(CustomerDataInterface $interface)
    {
        $this->interface = $interface;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::search()->orderBy('name')->paginate(20);

        $movies = addmovie::all();/*search()->orderBy('director_name,release_year')*/
        return view('customerhomepage', compact('movies'));

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required|min:10|max:13',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|max:8',
        ]);

        $array = [
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ];

//        for event register
        event(new eventregister($array));

//        for interface instance method
        $this->interface->PostData($array);

        return redirect('/signin');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }

//    for customer authentication

    public function checkAuthUser(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:4|max:8',
        ]);
//        dd($request->input());

        $credentials = $request->only('email', 'password');
        /*        var_dump($credentials);*/

//        match email and password with customers table using attempt and guard is use for data compare to which table
        if (Auth::guard('customer')->attempt($credentials)) {
//           for session generate
            $request->session()->regenerate();
            $data = customer::where('email',$credentials['email'])->first();

            $request->session()->put('customer_id',$data->id);
            return redirect('/index');
        } else {
            return redirect()->back()->with('error', 'The Credentials are/is invalid');
        }

    }


    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/signup');

    }

    public function findMovie(Request $request)
    {


        $finddata = $request->get('find');

        /*$request->input();
        dd($request);*/

//        $area = theatre::Where('TheatreCity', 'LIKE', "%" . $finddata ."%")->with('addmovie')->get();

        $movies = theatre::join('addmovies', 'addmovies.id', '=', 'theatres.addmovie_id')
            ->select('addmovies.id', 'addmovies.MovieName', 'addmovies.MoviePoster', 'addmovies.MovieDescription', 'addmovies.Rate', 'theatres.TheatreName', 'theatres.TheatreCity', 'theatres.RunTime')
            ->where('TheatreCity', 'LIKE', "%{$finddata}%")
            ->orWhere('TheatreName', 'LIKE', "%{$finddata}%")
            ->orWhere('MovieName', 'LIKE', "%{$finddata}%")
            ->get();

        return view("customerhomepage")->with('movies', $movies);

    }

    /*public function bookTicket($id)
    {

        $ticket = book_movie_ticket::join('addmovies', 'addmovies.id', '=', 'book_movie_ticket.addmovie_id')
            ->join('customers', 'customers.id', '=', 'book_movie_ticket.customer_id')
            ->select('book_movie_tickets.TotalPerson', 'addmovies.MovieName', 'addmovies.MoviePoster', 'addmovies.Description',
                'addmovies.DirectorName', 'addmovies.Rate', 'customers.name'
                , 'customers.contact', 'customers.email')
            ->get();

        return view("book_ticket")->with('ticket', $ticket);


    }*/

}
