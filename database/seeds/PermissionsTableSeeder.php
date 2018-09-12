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
        Permission::create(['name' => 'atleta.index']);
        Permission::create(['name' => 'atleta.edit']);
        Permission::create(['name' => 'atleta.show']);
        Permission::create(['name' => 'atleta.create']);
        Permission::create(['name' => 'atleta.destroy']);

        //Admin
        $admin = Role::create(['name' => 'Admin']);

        $admin->givePermissionTo([
            'atleta.index',
            'atleta.edit',
            'atleta.show',
            'atleta.create',
            'atleta.destroy'
        ]);
        //$admin->givePermissionTo('atleta.index');
        //$admin->givePermissionTo(Permission::all());
       
        //Guest
        $guest = Role::create(['name' => 'Guest']);

        $guest->givePermissionTo([
            'atleta.index',
        ]);

        //User Admin
        $user = User::find(1); //admin
        $user->assignRole('Admin');
        $user = User::find(2); //darwing
        $user->assignRole('Guest');
    }
}