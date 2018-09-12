<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SistemaMedico\User::create([
            'name'      => 'Administrador',
            'email'     => 'admin@admin.com',
            'password'     => bcrypt('admin'),

        ]);
        SistemaMedico\User::create([
            'name'      => 'Darwing',
            'email'     => 'd@example.com',
            'password'     => bcrypt('23456'),

        ]);
    }
}
