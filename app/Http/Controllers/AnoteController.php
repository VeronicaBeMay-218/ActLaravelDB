<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use App\Models\Subject;
use App\Policies\NotaPolicy;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;


class AnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //public function __construct()
     //{
     //    $this->authorizeResource(Nota::class, 'nota');
    // }


    public function index()
    {
        //
        $notas = Nota::where('user_id', auth()->user()->id)->get();
        //dd($notas);
        return view('notas.all', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //$this->authorize('create', Nota::class); 
        $temas = DB::table('subjects')
            ->join('topics', 'subjects.id', '=', 'topics.subject_id')
            ->select('topics.id', 'topics.tema')
            ->where('subjects.carrera', auth()->user()->ing)
            ->get();
        //dd($temas);
        return view('notas.create', compact('temas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //reglas de validación
        //almacena en la base de datos
        $validator = Validator::make($request->all(), [
            'tema' => 'required',
            'palabras' => 'required',
            'anotaciones' => 'required',
            'resumen' => 'required'
        ]);
 
        //validación
        if ($validator->fails()) {
            return redirect('notas/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        //inserción
        $nota = new Nota();
        $nota->anotaciones = $request->anotaciones;
        $nota->palabrasClave = $request->palabras;
        $nota->resumen = $request->resumen;
        $nota->user_id = auth()->user()->id;
        $nota->topic_id = $request->tema;
        $nota->save();
        return redirect()->route('notas.show',$nota);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $nota = Nota::find($id);

        $this->authorize('view', $nota); 


        return view('notas.show', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
        $nota=Nota::find($id);


       // $this->authorize('edit', $nota); //update por view

        return view('notas.edit',compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        

        //reglas de validación
        $validator = Validator::make($request->all(), [
            'palabras' => 'required',
            'resumen' => 'required'
        ]);
 
        //validación
        if ($validator->fails()) {
            return redirect("notas/$id/edit")
                        ->withErrors($validator)
                        ->withInput();
        }

        $nota = Nota::find($id);
        $nota->resumen = $request->resumen;
        $nota->palabrasClave= $request->palabras;
        $nota->save();
        return redirect()->route('notas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
      
        $nota = Nota::find($id);

        //$this->authorize('detele', $nota); 

        $nota->delete();
        return redirect()->route('notas.index');
    }
}