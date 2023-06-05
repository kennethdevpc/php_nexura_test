<?php

namespace Database\Seeders;

//use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = Role::create([
            'name' => 'Administrator',
           // 'descripcion' => 'Descripcion Admin',
        ]);
        $author = Role::create([
            'name' => 'Author',
           // 'descripcion' => 'Descripcion Author',
        ]);
        Role::create([
            'name' => 'role3',
            // 'descripcion' => 'Descripcion Author',
        ]);
        Role::create([
            'name' => 'role4',
            // 'descripcion' => 'Descripcion Author',
        ]);
        Role::create([
            'name' => 'role5',
            // 'descripcion' => 'Descripcion Author',
        ]);
        Role::create([
            'name' => 'role6',
            // 'descripcion' => 'Descripcion Author',
        ]);
        Role::create([
            'name' => 'role7',
            // 'descripcion' => 'Descripcion Author',
        ]);

       // admin:
        $permission = Permission::create([
            'name' => 'admin.index',
            'description' => 'Ver dashboard admin',
        ])->syncRoles([$admin,$author]);


        //roles
        $permission = Permission::create([
            'name' => 'roles.index',
            'description' => 'ver roles',
        ])->syncRoles([$admin, $author]);
        $permission = Permission::create([
            'name' => 'roles.create',
            'description' => 'crear roles',
        ])->assignRole($admin);
        $permission = Permission::create([
            'name' => 'roles.edit',
            'description' => 'editar roles',
        ])->assignRole($admin);
        $permission = Permission::create([
            'name' => 'roles.destroy',
            'description' => 'eliminar roles',
        ])->assignRole($admin);

        //areas:
        $permission = Permission::create([
            'name' => 'areas.index',
            'description' => 'ver areas',
        ])->syncRoles([$admin,$author]);
        $permission = Permission::create([
            'name' => 'areas.create',
            'description' => 'crear areas',
        ])->assignRole($admin);
        $permission = Permission::create([
            'name' => 'areas.edit',
            'description' => 'editar areas',
        ])->assignRole($admin);
        $permission = Permission::create([
            'name' => 'areas.destroy',
            'description' => 'eliminar areas',
        ])->assignRole($admin);


        //usuarios


        Permission::create([
            'name' => 'users.index',
            'description' => 'ver users',
        ])->assignRole($admin);
        Permission::create([
            'name' => 'users.create',
            'description' => 'crear users',
        ])->assignRole($admin);
        Permission::create([
            'name' => 'users.edit',
            'description' => 'editar users',
        ])->assignRole($admin);
        Permission::create([
            'name' => 'users.destroy',
            'description' => 'eliminar users',
        ])->assignRole($admin);





       /* Role::create([
            'name' => 'Desarrollador',
            //'descripcion' => 'Descripcion Desarrollador',
        ]);
        Role::create([
            'name' => 'Analista',
            //'descripcion' => 'Descripcion Analista',
        ]);
        Role::create([
            'name' => 'Tester',
            //'descripcion' => 'Descripcion Tester',
        ]);
        Role::create([
            'name' => 'Diseñador',
            //'descripcion' => 'Descripcion Diseñador',
        ]);
        Role::create([
            'name' => 'Profesional PMO',
            //'descripcion' => 'Descripcion Profesional PMO',
        ]);
        Role::create([
            'name' => 'Profesional de servicios',
            //'descripcion' => 'Descripcion Profesional de servicios',
        ]);
        Role::create([
            'name' => 'Auxiliar administrativo',
            //'descripcion' => 'Descripcion Auxiliar administrativo',
        ]);
        Role::create([
            'name' => 'Codirector',
            //'descripcion' => 'Descripcion Codirector',
        ]);*/

    }
}
