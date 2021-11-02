<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use RealRashid\SweetAlert\Facades\Alert; 
class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::All();
        return view('publicaciones.index')->with ('publicaciones',$publicaciones );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicaciones.create');
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
            'titulo'=>'required',
            'descripcion'=>'required',
        ]);
        
        $publicacion = new Publicacion();
        $publicacion-> titulo = $request->get('titulo');
        $publicacion-> descripcion = $request->get('descripcion');     
        $publicacion->save();

        return redirect()->route('publicaciones.index')->with('exito','publicacion creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('publicaciones.show', [
            'publicacion' => Publicacion::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $publicacion = Publicacion::find($id);
         return view('publicaciones.edit')->with ('publicacion', $publicacion);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'=>'required',
            'descripcion'=>'required',
        ]);
        
        $publicacion = new Publicacion();
        $publicacion-> titulo = $request->get('titulo');
        $publicacion-> descripcion = $request->get('descripcion');     
        $publicacion->save();

        return redirect()->route('publicaciones.index')->with('exito','publicacion editada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion = Publicacion::find($id);
        $publicacion->delete();
        return redirect('/publicaciones')->with('exito','Publicacion Eliminada con exito');
    }
}