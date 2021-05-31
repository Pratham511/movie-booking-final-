<?php

namespace App\Http\Controllers;

use App\Models\addmovie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Add_Actor_Interface;
use App\Models\actor;

class AddActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $AddActorInterface;

    public function __construct(Add_Actor_Interface $AddActorInterface)
    {
        $this->AddActorInterface = $AddActorInterface;
    }
    public function index()
    {
        $actors= actor::all();

        return view('view_actor_detail', compact('actors'));
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
            'm_id' => 'required',
            'ActorName' => 'required',
            'ActorBio' => 'required',
            'ActorBirth' => 'required',
        ]);
        $array = [
            'm_id' => $request->m_id,
            'ActorName' => $request->ActorName,
            'ActorBio' => $request->ActorBio,
            'ActorBirth' => $request->ActorBirth
        ];
        $this->AddActorInterface->AddData($array);
        return redirect('/admin/indexActor');
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
        $change = actor::findorfail($id);
        return view('edit_actor_by_admin', compact('change'));
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
        actor::where('id', $data['id'])->update(['m_id' => $data['m_id'],
            'ActorName' => $data['ActorName'],
            'ActorBio' => $data['ActorBio'],
            'ActorBirth' => $data['ActorBirth']]);

        return redirect('/admin/indexActor');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = actor::destroy($id);
        return redirect('/admin/indexActor');
    }

    public function details(Request $req){

        $movie=addmovie::where(['addmovies.id' => $req->id])->get();
        $actor=actor::where(['m_id' => $req->id])->get();

        return view("view_movie_detail_by_customer")->with(['movies' => $movie,  'actors' => $actor]);
    }

    public function showActor(Request $req){

        $movie=addmovie::where(['addmovies.id' => $req->id])->get();

        return view("add_actor_by_admin")->with('movie' , $movie);
    }


}
