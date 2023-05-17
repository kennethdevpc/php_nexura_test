<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['empleados'] = Empleado::all(); //el nombre empleados lo puedo acceder desde las vistas
        return view('empleado.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'nombre'=>'required|string|max:255',
            'email'=>'required|email',
            'sexo'=>'required|string|max:2',
            'area_id'=>'required|integer|max:11',
            'boletin'=>'required|string|max:11',
            'descripcion'=>'required|string|max:255',
        ];
        $mensaje = [
            'required'=>'El :attribute es requerido',
            'descripcion.required'=>'La :attribute es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        $dataEmployee = request()->except('_token');
        Empleado::insert($dataEmployee);

        return redirect('empleado')->with('mensaje','¡empleado agregado con exito!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'nombre'=>'required|string|max:255',
            'email'=>'required|email',
            'sexo'=>'required|string|max:2',
            'area_id'=>'required|integer|max:11',
            'boletin'=>'required|string|max:11',
            'descripcion'=>'required|string|max:255',
        ];
        $mensaje = [
            'required'=>'El :attribute es requerido',
            'descripcion.required'=>'La :attribute es requerida'
        ];
        $this->validate($request,$campos,$mensaje);

        $dataEmployee = request()->except('_token', '_method');
        Empleado::where('id','=', $id)->update($dataEmployee);
        $empleado = Empleado::findOrFail($id);
        return redirect('empleado')->with('mensaje','!se actualizo el empleado correctamente¡');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        /*$empleado = Empleado::findOrFail($id);
        if(Storage::delete('public/'.$empleado->Foto)){
            Empleado::destroy($id);
        }*/
        Empleado::destroy($id);
        return redirect('empleado')->with('mensaje','!se elimino el empleado correctamente¡');
    }
}
