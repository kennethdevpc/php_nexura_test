<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'sexo',
        'boletin',
        'descripcion',
        'area_id'
    ];
    protected array $translateFillable = [
        'id',
        'no. de identificación',];
    //relacion uno a uno inversa
    public function area(){
        /*$area = Area::find($this->area_id);
        return $area;*/
        //forma 2 mas usada
        return $this->belongsTo('App\Models\Area');
    }
    //relacion uno a muchos inversa
    public function areaUnoMuchos(){
        /*$area = Area::find($this->area_id);
        return $area;*/
        //forma 2 mas usada
        return $this->belongsTo('App\Models\Area');
    }

    //relacion many to many
    //protected $table = 'empleado_rol';//Esta línea le indica a Laravel que la tabla intermedia se llama "empleado_rol" en vez de "empleado_role". Al especificar el nombre exacto de la tabla, se evita que Laravel intente adivinar el nombre de la tabla y se utiliza el nombre que se definió en la migración
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }


}
