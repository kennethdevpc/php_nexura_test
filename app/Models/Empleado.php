<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

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
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }


}
