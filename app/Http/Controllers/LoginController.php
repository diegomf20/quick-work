<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Empresa;
use App\Model\Postulante;

class LoginController extends Controller
{
    public function ingresar(Request $request){
        if ($request->tipo=="empresa") {
            $empresa=Empresa::where('email',$request->usuario)
                ->where('contrasenia',$request->contrasenia)
                ->first();
            if ($empresa!=null) {
                return response()->json([
                    'status'=>'OK',
                    'data'=>$empresa
                ]);
            }else{
                return response()->json([
                    'status'=>'INFO',
                    'data'=>'Usuario o contraseña incorrecto.'
                ]);
            }
        }else {
            $postulante=Postulante::where('email',$request->usuario)
                ->where('contrasenia',$request->contrasenia)
                ->first();
            if ($postulante!=null) {
                return response()->json([
                    'status'=>'OK',
                    'data'=>$postulante
                ]);
            }else{
                return response()->json([
                    'status'=>'INFO',
                    'data'=>'Usuario o contraseña incorrecto.'
                ]);
            }
        }
    }
}
