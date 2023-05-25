<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['areas'] = Area::all(); //el nombre areas lo puedo acceder desde las vistas
        return view('area.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('area.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'descripcion.required' => 'La :attribute es requerida'
        ];

        $this->validate($request, $campos, $mensaje);
        $dataArea = request()->except('_token', 'descripcion');
        $area = Area::create($dataArea);
        return redirect('area')->with('mensaje', '¡area agregada con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $area = Area::findOrFail($id);
        return view('area.detail', compact('area'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $area = Area::findOrFail($id);
        return view('area.edit', compact('area'), );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'descripcion.required' => 'La :attribute es requerida'
        ];
        $this->validate($request, $campos, $mensaje);
        $dataArea = request()->except('_token', '_method', 'descripcion');
        // $dataArea = get_object_vars($dataArea);
        Area::where('id', '=', $id)->update($dataArea);
        return redirect('area')->with('mensaje', '!se actualizo el area correctamente¡');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $area = Area::findOrFail($id);
        if ($area == null) {
            return $data = ["id" => $id, "error" => "Researcher no Exist into the database"];
        } else {
            Area::destroy($id);
        }


        return redirect('area')->with('mensaje', '!se elimino el area correctamente¡');


    }
}
