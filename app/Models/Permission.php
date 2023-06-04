<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    public function roles():BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function actions()
    {
        return $this->belongsToMany(Action::class);
    }
}
