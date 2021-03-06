<?php

namespace App\Http\Controllers\Empleado;

use App\EmpleadoContacto;
use App\Empleado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpleadoContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Empleado $empleado)
    {
        return view('empleado.empleadocontacto.index', ['contactos'=>$empleado->contactos, 'empleado'=>$empleado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Empleado $empleado)
    {
        return view('empleado.empleadocontacto.create', ['empleado'=>$empleado]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Empleado $empleado)
    {
        $empleado->contactos()->save(new EmpleadoContacto($request->all()));
        return redirect()->route('empleados.contactos.index',['empleado'=>$empleado]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmpleadoContacto  $empleadoContacto
     * @return \Illuminate\Http\Response
     */
    public function show(EmpleadoContacto $empleadoContacto)
    {
        return view('empleado.empleadocontacto.show', ['empleadoContacto'=>$empleadoContacto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmpleadoContacto  $empleadoContacto
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpleadoContacto $empleadoContacto)
    {
        return view('empleado.empleadocontacto.edit', ['empleadoContacto'=>$empleadoContacto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmpleadoContacto  $empleadoContacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpleadoContacto $empleadoContacto)
    {
        $empleadoContacto->update($request->all());
        return redirect()->route('empleadosempleados.contactos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmpleadoContacto  $empleadoContacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpleadoContacto $empleadoContacto)
    {
        $empleadoContacto->delete();
        return redirect()->route('empleadosempleados.contactos.index');
    }
}