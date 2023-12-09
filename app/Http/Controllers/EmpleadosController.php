<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nombre" => 'required',
            "cedula" => 'required|integer',
            "direccion" => 'string',
            "telefono" => 'string'
        ]);

        Empleado::create([
            "nombre" => $request->nombre,
            "cedula" => $request->cedula,
            "direccion" => $request->direccion,
            "telefono" => $request->telefono
        ]);

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, int $id)
    {
    //     $this->validate($request, [
    //         "nombre" => 'required',
    //         "cedula" => 'required|integer',
    //         "direccion" => 'string',
    //         "telefono" => 'string'
    //     ]);

    //     $empleado = Empleado::where('id', '=', $id)->first();
    //     $empleado->nombre = $request->nombre;
    //     $empleado->cedula = $request->cedula;
    //     $empleado->direccion = $request->direccion;
    //     $empleado->telefono = $request->telefono;

    //     $empleado->save();

    //     return redirect()->route('home.index');

    // }

    // public function delete(Int $id) {
    //     $empleado = Empleado::where('id', '=', $id)->first();
    //     $empleado->delete();

    //     return redirect()->route('home.index');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
