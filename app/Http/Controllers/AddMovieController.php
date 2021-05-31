<?php

namespace App\Http\Controllers;

use App\Models\addmovie;
use Illuminate\Http\Request;
use App\Add_Movie_Interface;

class AddMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $AddMovieInterface;

    public function __construct(Add_Movie_Interface $AddMovieInterface)
    {
        $this->AddMovieInterface = $AddMovieInterface;
    }

    public function index()
    {
        $movies = addmovie::paginate(2);

        return view('AdminHomePage', compact('movies'));

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
            'MovieName' => 'required',
            'MoviePoster' => 'required',
            'MovieDescription' => 'required',
            'DirectorName' => 'required',
            'Rate' => 'required']);

        $request->file('MoviePoster')->move('image',$request->file('MoviePoster')->getClientOriginalName());
        $array = [
            'MovieName' => $request->MovieName,
            'MoviePoster' => $request->file('MoviePoster')->getClientOriginalName(),
            'MovieDescription' => $request->MovieDescription,
            'DirectorName' => $request->DirectorName,
            'Rate' => $request->Rate,

        ];
        $this->AddMovieInterface->AddData($array);
        return redirect('/admin/index');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $change = addmovie::findorfail($id);
        return view('edit_movie_by_admin', compact('change'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        $this->AddMovieInterface->UpdateData($array);
        $request->file('MoviePoster')->move('image',$request->file('MoviePoster')->getClientOriginalName());

        $data = $request->input();
        addmovie::where('id', $data['id'])->update(['MovieName' => $data['MovieName'],
            'MoviePoster' => $request->file('MoviePoster')->getClientOriginalName(),
            'MovieDescription' => $data['MovieDescription'],
            'DirectorName' => $data['DirectorName'],
            'Rate' => $data['Rate'],
            ]);


        return redirect('/admin/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = addmovie::destroy($id);
        return redirect('/admin/index');

    }
}
