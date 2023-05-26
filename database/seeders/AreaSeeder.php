<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Area::create([
            'nombre' => 'Administrativa y Financiera',
            'descripcion' => 'Descripcion Administrativa y Financiera',
        ]);
        Area::create([
            'nombre' => 'Ingeniería',
            'descripcion' => 'Descripcion Ingeniería',
        ]);
        Area::create([
            'nombre' => 'Desarrollo de Negocio',
            'descripcion' => 'Descripcion Desarrollo de Negocio',
        ]);
        Area::create([
            'nombre' => 'Proyectos',
            'descripcion' => 'Descripcion Proyectos',
        ]);
        Area::create([
            'nombre' => 'Servicios',
            'descripcion' => 'Descripcion Servicios',
        ]);
        Area::create([
            'nombre' => 'Calidad',
            'descripcion' => 'Descripcion Calidad',
        ]);



    }
}
