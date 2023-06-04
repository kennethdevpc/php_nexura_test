<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    protected $guard_name = 'api';
    use HasFactory;
    protected $fillable = [
        'name',
        'nombre',
        'descripcion',

    ];

    //relacion many to many
    public function empleados(){
        return $this->belongsToMany('App\Models\Empleado');
    }


    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function permissions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Permission::class);
    }


}
