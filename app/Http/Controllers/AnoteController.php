<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//agregar DB
//use validator

class AnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $notas=Note::where('user_id',auth()->user()->id)->get();
        return view('notas.all',compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //$asignaturas=Subject::where('carrrera', auth()->user()->ing)->get();
       
        //$temas=array()
        //foreach ($asignaturas as $asig){
            //dd($asig->topics);

           // array_push ($temas,$asig->topics);
        //}
        //$asignaturas->dd();

        //dd($temas);
        //return view('notas.create');



        //$notas=Note::find('user_id',auth()->user()->id)->get();
        //return view('notas.show',compact('nota'));
        //return 'create';
    }







    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         //dd(/$request->resumen)
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

        // $nota = new Anota();
        // $nota->anotaciones =$request
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $notas=Note::find('user_id',auth()->user()->id)->get();
        return view('notas.show',compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //Nota=Anote::find
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $nota = Anote::find($id);
        $nota->resumen = $request->resumen;
        $nota->palabrasClaves = $request->palabrasClaves;
        $nota->palabrasClaves = $request->palabrasClaves;

        
        
        

       //agregar la validacion AQUI LA DE ARRIBA

       return redirect()->route('notas.index',$nota);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $flight = Anote::find($id);
 
        $nota->delete();

        return redirect()->route('notas.index');
    }
}
