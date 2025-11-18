<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Espacio;
use Illuminate\Http\Request;

class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $espacios= Espacio::paginate(10);
        return view('espacios.index',compact('espacios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('espacios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
$data = $request->validate([
'nombre' => 'required|string|max:255',
'tipo' => 'required|string|max:255',
'capacidad' => 'required|integer|min:1',
'ubicacion' => 'required|string|max:255',
]);


Espacio::create($data);
return redirect()->route('espacios.index')->with('success','Espacio creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Espacio $espacio)
    {
        
       return view('espacios.edit', compact('espacio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Espacio $espacio)
    {
        $data = $request->validate([
            'nombre'=> 'required|string|max:255',
            'tipo'=> 'required|string|max:255',
            'capacidad'=> 'required|integer|min:1',
            'ubicacion'=> 'required|string|max:255',
        ]);
        $espacio->update($data);
        return redirect()->route('espacios.index')->with('success','Espacio actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espacio $espacio)
    {
      $espacio->delete();
      return redirect()->route('espacios.index')->with('success','Espacio eliminado.');
    }
}
