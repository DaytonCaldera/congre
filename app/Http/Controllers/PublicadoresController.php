<?php

namespace App\Http\Controllers;

use App\Models\publicadores;
use App\Http\Requests\StorepublicadoresRequest;
use App\Http\Requests\UpdatepublicadoresRequest;
use Illuminate\Foundation\Http\FormRequest as Request;
use App\Mail\Recordatorio;
use Illuminate\Support\Facades\Mail;

class PublicadoresController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicadores = publicadores::all();
        // dd($publicadores);
        return view("paginas.administracion.publicadores.lista")->with(['publicadores' => $publicadores]);
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

    public function send_mail(){
        Mail::to(['dayton.caldera1711@gmail.com'])->send(new Recordatorio());
        return redirect()->route('lista.publicadores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepublicadoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepublicadoresRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publicadores  $publicadores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(publicadores::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publicadores  $publicadores
     * @return \Illuminate\Http\Response
     */
    public function edit(publicadores $publicadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepublicadoresRequest  $request
     * @param  \App\Models\publicadores  $publicadores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepublicadoresRequest $request, publicadores $publicadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publicadores  $publicadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicadores $publicadores)
    {
        //
    }
}
