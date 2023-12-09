<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class CrearController extends Controller
{

    public function index()
    {
        return view('crear');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Crear $crear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crear $crear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crear $crear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crear $crear)
    {
        //
    }
}
