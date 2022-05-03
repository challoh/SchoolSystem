<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
       return  view('users',compact('users'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       DB::table('users')->insert([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>$request->password
       ]);

       return redirect()->back()->with('add_user', 'User added successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('edit-users')->with('users', $users);
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

        /**
         * AND YOU NEED TO SANITIZE YOUR INPUT BEFORE PROCESSING THEM..
         *
         * KUNA CORONA ):
         *
         *
         */
        $update_user = User::find($request->id);

        $update_user ->name = $request ->name;
        $update_user ->email = $request ->email;

        $update = $update_user ->save();

        if(!$update)
        {
            return redirect()->back()->with('update_user', 'Error could not update');
        }


        return redirect()->back()->with('update_user', 'User updated successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');
    }
}
