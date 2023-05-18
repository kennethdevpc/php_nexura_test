<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Empleado;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $roles = Role::all();
        return view('empleado.create', compact('area'), compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $campos = [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'sexo' => 'required|string|max:1',
            'area_id' => 'required|integer|max:11',
            'descripcion' => 'required|string|max:255',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'descripcion.required' => 'La :attribute es requerida'
        ];


        $this->validate($request, $campos, $mensaje);
        $dataEmployee = request()->except('_token', 'opcion');
        //$empleado = Empleado::insert($dataEmployee); //no la usare ya qeu, no devuelve el modelo creado, lo que dificulta la realización de acciones adicionales con el modelo.

        //en lugar de eso se utiliza create() o la función fill() y save() para crear modelos en Laravel. Estas funciones utilizan los modelos de Laravel y aplican las validaciones de datos del modelo, las relaciones many-to-many y otros comportamientos definidos en el modelo
        // Crear el modelo del empleado con los datos del formulario uso función fill()
        //pero debo crear enel modelo"Models/Empleado.php" esto: protected $fillable = ['nombre'];
       //forma 1 con fill
        $empleado = new Empleado();
        $empleado->fill($dataEmployee);
        $empleado->save();

        //$empleado = Empleado::create($dataEmployee);



        $ids_roles = $request->input('opcion');

        $response = $empleado->roles()->attach($ids_roles);

        return redirect('empleado')->with('mensaje', '¡empleado agregado con exito!');

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
        $roles = Role::all();
        $area = Area::all();
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'), compact('area', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //--------------
        $responseEmpleadoRol = $this->updateER($request, $id);
        //--------------
        $camposx = [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'sexo' => 'required|string|max:1',
            'area_id' => 'required|integer|max:11',
            'descripcion' => 'required|string|max:255',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'descripcion.required' => 'La :attribute es requerida'
        ];
        $this->validate($request, $camposx, $mensaje);
        $dataEmployee = request()->except('_token', '_method', 'opcion');

        if ($request->boletin) {
            if ($request->boletin == "1") {
                $request->boletin = 1;
                $dataEmployee = json_decode(json_encode($dataEmployee));
                $dataEmployee->boletin = 1;
            } else {
                $request->boletin = 0;
                $dataEmployee = json_decode(json_encode($dataEmployee));
                $dataEmployee->boletin = 0;
            }
        } else {
            $request->boletin = 0;
            $dataEmployee = json_decode(json_encode($dataEmployee));
            $dataEmployee->boletin = 0;
        }
        $dataEmployee = get_object_vars($dataEmployee);
        Empleado::where('id', '=', $id)->update($dataEmployee);
        //$empleado = Empleado::findOrFail($id);
        return redirect('empleado')->with('mensaje', '!se actualizo el empleado correctamente¡');

    }

    public function updateER(Request $request, $id)
    {
        $ids_roles = $request->input('opcion');
        $empleado = Empleado::find($id);
        $empleado->roles()->sync($ids_roles);
        return [$empleado, $ids_roles];
    }

    public function updateEmpleadoRol(Request $request, $id)
    {
        //
        $dataEmployee = request()->except('_token', '_method');

        if ($request) {
            $mensaje = ["msj2" => "no hay $id", "msj1" => $request->all()];
            $opciones = $request->opcion ? $request->opcion : null;
            $mensaje = $opciones;

        } else {
            $mensaje = "no hay $id";
        }
        $empleado = Empleado::where('id', '=', $id)->get();
        $infoEmpleadoRol = DB::table('empleado_rol')
            ->where('empleado_id', '=', $empleado[0]->id)
            ->get();
        $mensaje2 = $infoEmpleadoRol;
        $mensaje3 = $empleado;
        $requestNew = ["empleado_id" => "", "role_id" => ""];

        dump($opciones);
        foreach ($opciones as $opcionRol) {
            foreach ($infoEmpleadoRol as $empleadoRol) {
                $empleadoRolx = DB::table('empleado_rol')
                    ->where('id', $empleadoRol->id)
                    ->where("role_id", '=', intval($opcionRol))->pluck('id');
                dump($empleadoRolx->first() == 4);


                if ($empleadoRolx) {
                    dump($empleadoRolx);
                } else {
                    return ("j");
                }
            }
        }


        dd("");
        foreach ($infoEmpleadoRol as $empleadoRol) {

            $empleadoRol = DB::table('empleado_rol')->where('id', $empleadoRol->id)->update(['role_id' => 4]);
            dd($empleadoRol);
            $empleadoRol->update($requestNew);
            dd($empleadoRol);
        }
        dd("");

        return $mensaje;


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
        return redirect('empleado')->with('mensaje', '!se elimino el empleado correctamente¡');
    }
}
