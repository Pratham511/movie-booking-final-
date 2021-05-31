<?php

namespace App\Http\Controllers;

use App\Models\addmovie;
use App\Models\theatre;
use Illuminate\Http\Request;
use App\Add_Theatre_Interface;
use Illuminate\Support\Facades\DB;

class AddTheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $AddTheatreInterface;

    public function __construct(Add_Theatre_Interface $AddTheatreInterface)
    {
        $this->AddTheatreInterface = $AddTheatreInterface;
    }
    public function index()
    {
        $theatres= theatre::all();
        return view('view_theatre_detail', compact('theatres'));
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
            'TheatreName' => 'required',
            'TheatreCity' => 'required',
            'RunTime' => 'required',
            'addmovie_id'=>'required',
        ]);
        $array = [
            'TheatreName' => $request->TheatreName,
            'TheatreCity' => $request->TheatreCity,
            'RunTime' => $request->RunTime,
            'addmovie_id' => $request->addmovie_id,

        ];
        $this->AddTheatreInterface->AddData($array);
        return redirect('/admin/indexTheatre');
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
        $change = theatre::findorfail($id);
        return view('edit_theatre_by_admin', compact('change'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->input();
        theatre::where('id', $data['id'])->update(['TheatreName' => $data['TheatreName'],
            'TheatreCity' => $data['TheatreCity'],
            'RunTime' => $data['RunTime'],
            'addmovie_id' => $data['addmovie_id']]);

        return redirect('/admin/indexTheatre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = theatre::destroy($id);
        return redirect('/admin/indexTheatre');
    }

    public function showTheatre(Request $req){
        /*$movie = DB::table('addmovies')
            ->where(['addmovies.id' => $req->id])
            ->get();*/

        $movie=addmovie::where(['addmovies.id' => $req->id])->get();

        return view("add_theatre_by_admin")->with('movie' , $movie);
    }
}
