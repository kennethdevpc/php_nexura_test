<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create([
            'nombre' => 'Desarrollador',
            'descripcion' => 'Descripcion Desarrollador',
        ]);
        Role::create([
            'nombre' => 'Analista',
            'descripcion' => 'Descripcion Analista',
        ]);
        Role::create([
            'nombre' => 'Tester',
            'descripcion' => 'Descripcion Tester',
        ]);
        Role::create([
            'nombre' => 'Diseñador',
            'descripcion' => 'Descripcion Diseñador',
        ]);
        Role::create([
            'nombre' => 'Profesional PMO',
            'descripcion' => 'Descripcion Profesional PMO',
        ]);
        Role::create([
            'nombre' => 'Profesional de servicios',
            'descripcion' => 'Descripcion Profesional de servicios',
        ]);
        Role::create([
            'nombre' => 'Auxiliar administrativo',
            'descripcion' => 'Descripcion Auxiliar administrativo',
        ]);
        Role::create([
            'nombre' => 'Codirector',
            'descripcion' => 'Descripcion Codirector',
        ]);

    }
}
