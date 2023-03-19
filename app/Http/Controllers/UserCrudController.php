<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;//llamar al modelo

class UserCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //LLAMA AL MODELO USER
        $users = User::all();  //users url /users se va al index , en el index llama modelo user y al metodo all
        //dd($users); //all me devuelve todo y lo guarda en la variable users dd para probar
        return view('users.usersAll',compact('users'));//LLAMAR FUNCION COMPACT SE PEUDE MANDAR MAS DATOS
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
