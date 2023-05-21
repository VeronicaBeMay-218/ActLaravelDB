<?php

namespace App\Http\Controllers;
use App\Models\Nota;
use App\Models\Subject;
use App\Policies\NotaPolicy;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    //

    public function index()
    {
        //
       
        return view('calendario.all');
    }
}
