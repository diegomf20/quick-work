<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Postulacion;
use App\Model\Publicacion;

class PostulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $postulaciones=Postulacion::with('empresa')
            ->with('publicacion')
            ->where('postulante_id',$request->postulante_id)->get();
        return response()->json($postulaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postulacion=Postulacion::where('publicacion_id',$request->publicacion_id)
            ->where('postulante_id',$request->postulante_id)
            ->first();
        if ($postulacion==null) {
            $publicacion=Publicacion::where('id',$request->publicacion_id)
                ->first();
            $postulacion=new Postulacion();
            $postulacion->publicacion_id=$request->publicacion_id;
            $postulacion->postulante_id=$request->postulante_id;
            $postulacion->empresa_id=$publicacion->empresa_id;
            $postulacion->save();
            return response()->json([
                'status'=>"OK"
            ]);
        }else{
            return response()->json([
                'status'=>"INFO",
                'data'=>"Usted ya postulo a este trabajo"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
