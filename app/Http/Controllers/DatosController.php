<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DatosController extends Controller
{
    function procesar(Request $request)
    {
        $validar = Validator::make($request->all(), [
         'nombre'  => 'required|string'
        ,'edad'    => 'required|integer'
        
        ]);

        if ($validar->fails()) {
        // La validación ha fallado
        return response()->json([
         'message' => 'Los datos no son válidos'
        ,'errors' => $validar->errors()
        ], 400);
        }

        $nombre = $request->input('nombre');
        $edad   = $request->input('edad');

        return response()->json([
            'message' => "Hola, $nombre. Tienes $edad años."
        ], 200);


    }
}