<?php

namespace App\Http\Controllers;

use App\Models\roles_publicadores;
use App\Http\Requests\Storeroles_publicadoresRequest;
use App\Http\Requests\Updateroles_publicadoresRequest;

class RolesPublicadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storeroles_publicadoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeroles_publicadoresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roles_publicadores  $roles_publicadores
     * @return \Illuminate\Http\Response
     */
    public function show(roles_publicadores $roles_publicadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roles_publicadores  $roles_publicadores
     * @return \Illuminate\Http\Response
     */
    public function edit(roles_publicadores $roles_publicadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateroles_publicadoresRequest  $request
     * @param  \App\Models\roles_publicadores  $roles_publicadores
     * @return \Illuminate\Http\Response
     */
    public function update(Updateroles_publicadoresRequest $request, roles_publicadores $roles_publicadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roles_publicadores  $roles_publicadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(roles_publicadores $roles_publicadores)
    {
        //
    }
}
