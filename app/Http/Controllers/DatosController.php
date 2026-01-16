<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class DatosController extends Controller
{
    

    function procesar(Request $request)
    {
        if ($request->isMethod('post')) {
       

            $data = [
                'nombre' => $request->input('nombre'),
                'edad'  => $request->input('edad'),
            ];
            $rules = [
                'nombre' => 'required|string|max:255',
                'edad' => 'required|int',

            ];
            $validator = Validator::make($data, $rules);

            if ($validator->fails()) {
                // La validación ha fallado
                return response()->json([
                'message' => 'Los datos no son válidos',
                'errors' => $validator->errors()
                ], 400);
            }
            else{

                return "Hola, [". $request->input('nombre')."]. Tienes [". $request->input('edad') ."] años.";
            }


        }
        else{

            return view('formulario');


        }

    }
}
