<?php
//terminar
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Reminder;
use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\RedirectResponse;
use App\Policies\NotaPolicy;

use Illuminate\Support\Facades\Validator;



class RemindersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reminders=Reminder::where('user_id', auth()->user()->id)->get();
        return view('reminders.all',compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $asignaturas = Subject::where('carrera',auth()->user()->ing)->get();
        return view('reminders.create',compact('asignaturas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'mensaje' => 'required',
            'categoria' => 'required',
            'importancia' => 'required',
            'fecha' => 'required',
            'destacado' => 'required',
            'completado' => 'required'
            
        ]);
 
        //validación
        if ($validator->fails()) {
            return redirect('reminders/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        //inserción
        $reminder = new Reminder();
        $reminder->mensaje = $request->mensaje;
        $reminder->categoria = $request->categoria;
        $reminder->importancia = $request->importancia;
        $reminder->fecha = $request->fecha ;
        $reminder->destacado = $request->destacado;
        $reminder->completado = $request->completado;
       
        
        $reminder->user_id = auth()->user()->id;
        $reminder->subject_id = $request->nombre;
        $reminder->save();
        return redirect()->route('reminders.show',$reminder);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
       

        $reminder = Reminder::find($id);
       
       $this->authorize('view', $reminder); 

        return view('reminders.show', compact('reminder'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
       // $this->authorize('update', $reminder); //update por view

       // return view('reminders.edit',compact('reminders'));


        $reminder=Reminder::find($id);

        //$this->authorize('view', $reminder); 

        // $this->authorize('edit', $nota); //update por view
 
         return view('reminders.edit',compact('reminder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)



    {
        //

        $validator = Validator::make($request->all(), [
            'categoria' => 'required',
            'importancia' => 'required'
        ]);
 
        //validación
        if ($validator->fails()) {
            return redirect("reminders/$id/edit")
                        ->withErrors($validator)
                        ->withInput();
        }

        $reminder = Reminder::find($id);
        $reminder->categoria= $request->categoria;
        $reminder->importancia= $request->importancia;
        $reminder->save();
        return redirect()->route('reminders.index');


        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $reminder=Reminder::find($id);
        $reminder->delete();
        return redirect()->route('reminders.index');
    }

 
}
