<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Voto;
use Illuminate\Http\Request;

class VotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votos = Voto::All();
        return view('votos.index', compact ('votos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publicacion = Publicacion::All();
        return $voto;
        return view('votos.create', compact('publicacion', 'voto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'voto'=>'required',
        ]);
        
        $voto = new Voto();
        $voto->voto = $request->get('voto');
        $voto->save();
        return redirect('/publicaciones')->with('exito','Voto guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function show(Voto $voto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function edit(Voto $voto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voto $voto)
    {
        $request->validate([
            'voto'=>'required',
        ]);
        
        $voto = new Voto();
        $voto->voto = $request->get('voto');
        $voto->save();
        return redirect('/votos')->with('exito','Voto guardado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voto $voto)
    {
        //
    }
}
