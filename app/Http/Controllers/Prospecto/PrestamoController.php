<?php

namespace App\Http\Controllers\Prospecto;

use App\Prospecto;
use App\Prestamo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Prospecto $prospecto)
    {
        return view('prospectos.prestamos.index', ['prospecto' => $prospecto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Prospecto $prospecto)
    {
        return view('prospectos.prestamos.create', ['prospecto' => $prospecto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Prospecto $prospecto, Request $request)
    {
        $prestamo = new Prestamo($request->all());
        $prospecto->prestamos()->save($prestamo);
        return redirect()->route('prospectos.prestamos.index', ['prospecto' => $prospecto]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}