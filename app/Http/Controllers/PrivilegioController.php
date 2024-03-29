<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrivilegioRequest;
use App\Http\Requests\UpdatePrivilegioRequest;
use App\Models\Privilegio;

class PrivilegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paginas.administracion.privilegios.lista')->with(['privilegios'=>Privilegio::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePrivilegioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrivilegioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Privilegio  $privilegio
     * @return \Illuminate\Http\Response
     */
    public function show(Privilegio $privilegio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Privilegio  $privilegio
     * @return \Illuminate\Http\Response
     */
    public function edit(Privilegio $privilegio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrivilegioRequest  $request
     * @param  \App\Models\Privilegio  $privilegio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrivilegioRequest $request, Privilegio $privilegio)
    {
        // return response()->json($request);
        $privilegio = Privilegio::find($request->id);
        $privilegio->privilegio = $request->name;
        $privilegio->categoria = $request->categoria;
        return $privilegio->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Privilegio  $privilegio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privilegio $privilegio)
    {
        //
    }
}
