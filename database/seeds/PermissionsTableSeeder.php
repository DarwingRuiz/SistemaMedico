<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use SistemaMedico\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Permission list
        // crud de atleta
        Permission::create(['name' => 'Listar_atleta']);
        Permission::create(['name' => 'Editar atleta']);
        Permission::create(['name' => 'Mostrar atleta']);
        Permission::create(['name' => 'Crear atleta']);
        Permission::create(['name' => 'Eliminar atleta']);
        // crud de roles
        Permission::create(['name' => 'Listar roles']);
        Permission::create(['name' => 'Editar roles']);
        Permission::create(['name' => 'Mostrar roles']);
        Permission::create(['name' => 'Crear roles']);
        Permission::create(['name' => 'Eliminar roles']);
        // crud de usuarios
        Permission::create(['name' => 'Listar usuario']);
        Permission::create(['name' => 'Editar usuario']);
        Permission::create(['name' => 'Mostrar usuario']);
        Permission::create(['name' => 'Crear usuario']);
        Permission::create(['name' => 'Eliminar usuario']);
        // crud de historial medico
        Permission::create(['name' => 'Listar historial medico']);
        Permission::create(['name' => 'Editar historial medico']);
        Permission::create(['name' => 'Mostrar historial medico']);
        Permission::create(['name' => 'Crear historial medico']);
        Permission::create(['name' => 'Eliminar historial medico']);


        //Admin
        $admin = Role::create(['name' => 'Admin']);

        // $admin->givePermissionTo([
        //     'Listar_atleta',
        //     'Editar atleta',
        //     'Mostrar atleta',
        //     'Crear atleta',
        //     'Eliminar atleta'
        // ]);
        //$admin->givePermissionTo('atleta.index');
        $admin->givePermissionTo(Permission::all());
       
        //Guest
        $guest = Role::create(['name' => 'Guest']);

        $guest->givePermissionTo([
            'Listar_atleta',
        ]);

        //User Admin
        $user = User::find(1); //admin
        $user->assignRole('Admin');
        $user = User::find(2); //darwing
        $user->assignRole('Guest');
    }
}