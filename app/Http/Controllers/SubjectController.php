<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class SubjectController extends Controller
{
    //
    public function index()
    {
        //LLAMA AL MODELO USER
        
        $asignaturas = Subject::where('carrera',auth()->user()->ing)->get(); //where //where
        //dd($asignatura->topics); //all me devuelve todo y lo guarda en la variable users dd para probar
        return view('users.asignaturasAll',compact('asignaturas'));//LLAMAR FUNCION COMPACT SE PEUDE MANDAR MAS DATOS
    }




}
