<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['roles'] = Role::all(); //el nombre empleados lo puedo acceder desde las vistas
        return view('role.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('role.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'name' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'descripcion.required' => 'La :attribute es requerida'
        ];

        $this->validate($request, $campos, $mensaje);
        //$dataRole = request()->except('_token', 'descripcion');
        $dataRole = request()->except('_token');
        $role = Role::create($dataRole);
        return redirect('role')->with('mensaje', '¡role agregada con exito!');



    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $role = Role::findOrFail($id);
        return view('role.detail', compact('role'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'), );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'name' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'descripcion.required' => 'La :attribute es requerida'
        ];
        $this->validate($request, $campos, $mensaje);
        $dataRole = request()->except('_token', '_method', 'descripcion');
        // $dataRole = get_object_vars($dataRole);
        Role::where('id', '=', $id)->update($dataRole);
        return redirect('role')->with('mensaje', '!se actualizo el role correctamente¡');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $role = Role::findOrFail($id);
        if ($role == null) {
            return $data = ["id" => $id, "error" => "Researcher no Exist into the database"];
        } else {
            Role::destroy($id);
        }


        return redirect('role')->with('mensaje', '!se elimino el role correctamente¡');

    }
}
