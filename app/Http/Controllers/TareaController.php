<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas=Tarea::all();
        return view('tarea-list', ['tareas' => $tareas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, $this->rules);
        $tarea['descripcion'] = $request->descripcion;
        Tarea::insert($tarea);
        return redirect('/tareas')->with('success', 'Tarea creada');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea =  Tarea::findOrFail($id);
        return view('tarea-edit')->with('tarea',$tarea);
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
        $request->validate([
            'descripcion'=>'required'
        ]);

        Tarea::where('id',$id)->update(['descripcion' => $request->input('descripcion')]);
        return redirect('/tareas')->with('success', 'Tarea Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tarea::findOrFail($id)->delete();
        return redirect('/tareas')->with('success', 'Tarea Borrada');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function estado($id)
    {
        Tarea::where('id',$id)->update(['estado' => 'C']);
        return redirect('/tareas')->with('success', 'Tarea Modificada');
    }
}
