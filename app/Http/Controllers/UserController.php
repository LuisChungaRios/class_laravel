<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // all() => get() => where() => orderby
        // find(your_id)
        //
        /*$user = User::all();

        return $user;
        */
        $users = User::all();

        return view('users.index', compact('users'));



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

        // request accedes a todo lo que tiene tu ruta

        //  2 formar de guardar
        /*
        $user = new User();
        $user->name = 'User1';
        $user->last_name = 'User2';
        $user->email = 'user1@gmail.com';
        $user->type_document = 'DNI';
        $user->number_document = 987654321;
        $user->age = 10;
        $user->save();

        $user = User::create([
            'name' => 'User1',
            'last_name' => 'user 2',
            'email' => 'user1@gmail.com',
            'type_document' => 'DNI',
            'number_document' => 987654321,
            'age' => 12
        ]);
        */


        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'type_document' => $request->type_document,
            'number_document' => $request->number_document,
            'age' => $request->age,
            'password' => bcrypt($request->password)
        ]);
        return 'Se registro correctamente';


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

        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->save();

        return $user;



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()->back();


    }
}
