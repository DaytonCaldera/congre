<?php

namespace App\Http\Controllers;

use App\Models\roles_categorias;
use App\Http\Requests\Storeroles_categoriasRequest;
use App\Http\Requests\Updateroles_categoriasRequest;

class RolesCategoriasController extends Controller
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
     * @param  \App\Http\Requests\Storeroles_categoriasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeroles_categoriasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roles_categorias  $roles_categorias
     * @return \Illuminate\Http\Response
     */
    public function show(roles_categorias $roles_categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roles_categorias  $roles_categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(roles_categorias $roles_categorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateroles_categoriasRequest  $request
     * @param  \App\Models\roles_categorias  $roles_categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Updateroles_categoriasRequest $request, roles_categorias $roles_categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roles_categorias  $roles_categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(roles_categorias $roles_categorias)
    {
        //
    }
}
