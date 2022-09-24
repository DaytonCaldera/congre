<?php

namespace App\Http\Controllers;

use App\Models\grupos;
use App\Http\Requests\StoregruposRequest;
use App\Http\Requests\UpdategruposRequest;

class GruposController extends Controller
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
     * @param  \App\Http\Requests\StoregruposRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregruposRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function show(grupos $grupos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function edit(grupos $grupos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategruposRequest  $request
     * @param  \App\Models\grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategruposRequest $request, grupos $grupos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function destroy(grupos $grupos)
    {
        //
    }
}
