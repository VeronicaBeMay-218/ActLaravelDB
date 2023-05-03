<?php
//terminar
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Reminder;
use Illuminate\Http\RedirectResponse;

class RemindersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reminders=Reminder::where('user_id', auth()->user()->id)->get();
        return view('reminders.index',compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('reminders');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'mensaje' => 'required',
            'categoria' => 'required',
            'importanica' => 'required',
            'resumen' => 'required'
        ]);
 
        //validación
        if ($validator->fails()) {
            return redirect('recordatorios/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        //inserción
        $reminder = new Reminder();
        $reminder->mensaje = $request->mensaje;
        $reminder->categoria = $request->categoria;
        $reminder->mensaje = $request->mensaje;
        $reminder->mensaje = $request->mensaje;
        $reminder->mensaje = $request->mensaje;
        
        $reminder->user_id = auth()->user()->id;
        $reminder->subject_id = $request->asignatura;
        $reminder->save();
        return redirect()->route('reminders.show',$nota);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $reminder=Reminder::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $this->authorize('update', $nota); //update por view

        return view('notas.edit',compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)



    {
        //

        $reminder=Reminder::find($id);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $reminder=Reminder::find($id);
        $nota->delete();
        return redirect()->route('reminder.index');
    }
}
