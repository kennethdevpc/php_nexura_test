<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    //relacion one to one
    public function empleado(){
        /*$empleado = Empleado::where('area_id',$this->id)->first();
        return $empleado;*/

        //forma2: mas usada
        return $this->hasOne('App\Models\Empleado');
    }
    //relacion one to many

    public function empleados(){
        /*$empleado = Empleado::where('area_id',$this->id)->first();
        return $empleado;*/

        //forma2: mas usada
        return $this->hasMany('App\Models\Empleado');
    }
}
