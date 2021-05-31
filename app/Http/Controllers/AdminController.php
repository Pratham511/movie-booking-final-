<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\AdminDataInterface;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $admininterface;

    public function __construct(AdminDataInterface $admininterface)
    {
        $this->admininterface = $admininterface;

    }

    public function index()
    {

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
        $this->admininterface->PostAdminData($array);

        return redirect('/admin/signin');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }

    public function checkAuthAdmin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:4|max:8',
        ]);


        $credentials = $request->only('email', 'password');
        /*        var_dump($credentials);*/
        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'The Credentials are/is invalid');
        }

    }
    public function signout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/admin/signup');


    }
}
