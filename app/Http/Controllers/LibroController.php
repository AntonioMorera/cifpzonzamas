<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $libros = Libro::paginate(10);
        $cods_genero = Libro::$cods_genero;


        return view('libros.index', compact('libros', 'cods_genero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = ['exito' =>''];

        if ($request->isMethod('post')) {

            $validated = $request->validate([
                'titulo'      => 'required|string|max:255',
                'autor'       => 'required|string|max:255',
                'anho'        => 'required|integer',
                'genero'      => 'required|string|max:255',
                'descripcion' => 'required|string|max:1255',
            ]);

            $libro = new Libro();

            
            $libro->titulo      = $request->input('titulo');;
            $libro->autor       = $request->input('autor');;
            $libro->anho        = $request->input('anho');;
            $libro->genero      = $request->input('genero');;
            $libro->descripcion = $request->input('descripcion');

            $libro->save();   
            
            $data['exito'] = 'Operación realiza correctamente';

        }

        $libro = new Libro();


        return view('libros.create',['datos' => $data,'libro' => $libro,'cods_genero' => Libro::$cods_genero, 'disabled' => '','oper' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $libro = Libro::find($id);


        $datos = ['exito' => ''];

        return view('libros.create',[
            'libro' => $libro,
            'datos' => $datos,
            'cods_genero' => Libro::$cods_genero,
            'disabled' => 'disabled',
            'oper' => 'show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $libro = Libro::find($id);
        $disabled = '';
        $datos['exito'] = '';

        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'titulo' => 'required|string|max:255',
                'autor' => 'required|string|max:255',
                'anho' => 'required|integer',
                'genero' => 'required|string|max:255',
                'descripcion' => 'required|string|max:1255',
            ]);

            $libro->titulo = $request->input('titulo');
            $libro->autor = $request->input('autor');
            $libro->anho = $request->input('anho');
            $libro->genero = $request->input('genero');
            $libro->descripcion = $request->input('descripcion');
            $libro->save();

            $datos['exito'] = 'Operación realizada correctamente';
            $disabled = 'disabled';

            // Si es AJAX, devolvemos JSON
            if ($request->ajax()) {
                return response()->json([
                    'exito' => $datos['exito']
                ]);
            }
        }

        return view('libros.create', [
            'libro' => $libro,
            'datos' => $datos,
            'cods_genero' => Libro::$cods_genero,
            'disabled' => $disabled,
            'oper' => 'edit'
        ]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id='')
    {
       if ($request->isMethod('post')) {   

            /*
            $datos_save = [];
            
            $datos_save['titulo']       = $request->input('titulo');;
            $datos_save['autor']        = $request->input('autor');;
            $datos_save['anho']         = $request->input('anho');;
            $datos_save['genero']       = $request->input('genero');;
            $datos_save['descripcion']  = $request->input('descripcion');


            Libro::where('id',$request->input('id'))->update($datos_save);

            */

            $libro = Libro::find($request->input('id'));

            
            $libro->delete();
            
            return redirect()->route('libro.index');
            
        }
        else
        {
            $datos = ['exito' => ''];
            $libro = Libro::find($id);
            $disabled = 'disabled';

            return view('libros.create',['libro' => $libro,'datos' => $datos,'cods_genero' => Libro::$cods_genero, 'disabled' => $disabled,'oper' => 'destroy']);
        }

        
    }
}
