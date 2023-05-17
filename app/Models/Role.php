<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //relacion many to many
    public function empleados(){
        return $this->belongsToMany('App\Models\Empleado');
    }
}
