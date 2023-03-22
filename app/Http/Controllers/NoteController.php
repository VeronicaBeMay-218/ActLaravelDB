<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    // resumen palabra clave anotaciones user_id topic_id created_at 
    public function index(){

        $notas=Note::where('user_id',auth()->user()->id)->get();
        return view('notas.all',compact('notas'));
    }

    public function show($id){

        $notas=Note::find('user_id',auth()->user()->id)->get();
        return view('notas.show',compact('nota'));
    }
}
