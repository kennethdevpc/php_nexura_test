<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Empleado;
use App\Models\Role;
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
        $area = Area::all();
        $rol = Role::all();
        return view('empleado.create',compact('area'),compact('rol'));

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
            'sexo'=>'required|string|max:1',
            'area_id'=>'required|integer|max:11',
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
        $rol = Role::all();
        $area = Area::all();
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'),compact('area'),compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //


        $camposx = [
            'nombre'=>'required|string|max:255',
            'email'=>'required|email',
            'sexo'=>'required|string|max:1',
            'area_id'=>'required|integer|max:11',
            'descripcion'=>'required|string|max:255',
        ];
        $mensaje = [
            'required'=>'El :attribute es requerido',
            'descripcion.required'=>'La :attribute es requerida'
        ];
        $this->validate($request,$camposx,$mensaje);
        $dataEmployee = request()->except('_token', '_method');

        if ($request->boletin){
            if($request->boletin=="1"){
                $request->boletin=1;
                $dataEmployee = json_decode(json_encode($dataEmployee));
                $dataEmployee->boletin=1;
            }else{
                $request->boletin=0;
                $dataEmployee = json_decode(json_encode($dataEmployee));
                $dataEmployee->boletin=0;
            }
        }else{
            $request->boletin=0;
            $dataEmployee = json_decode(json_encode($dataEmployee));
            $dataEmployee->boletin=0;
        }
        $dataEmployee=get_object_vars($dataEmployee);
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
