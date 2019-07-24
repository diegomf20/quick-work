<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Publicacion;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $publicaciones=Publicacion::where('empresa_id',$request->id)->get();
        return response()->json($publicaciones);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacion=new Publicacion();
        $publicacion->titulo=$request->titulo;
        $publicacion->descripcion=$request->descripcion;
        $publicacion->educacion=$request->educacion;
        $publicacion->experiencia=$request->experiencia;
        $publicacion->edad=$request->edad;
        $publicacion->conocimiento=$request->conocimiento;
        $publicacion->lugar=$request->lugar;
        $publicacion->empresa_id=$request->empresa_id;
        $publicacion->save();
        return response()->json([
            "status"=>"OK",
            "data"=>$publicacion
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion=Publicacion::with('empresa')->where('id',$id)->first();
        return response()->json($publicacion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
