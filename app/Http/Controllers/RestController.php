<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas=Tarea::all();
        return response()->json([
            'message' => 'success'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion'=>'required'
        ]);

        $tarea['descripcion'] = $request->descripcion;
        Tarea::insert($tarea);
        return response()->json([
            'message' => 'success'
        ]);

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
        return response()->json([
            'message' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Tarea::findOrFail($id)->delete();
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'message' => 'No se encontro la tarea '.$id
            ]);
        }
        return response()->json([
            'message' => 'Tarea borrada'
        ]);
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
        return response()->json([
            'message' => 'Tarea completada'
        ]);
    }
}
