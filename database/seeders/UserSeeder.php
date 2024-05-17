<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creamos el usuario Administrador
        $admin = User::create([ 
            'name' => 'admin',
            'email' => 'admin@speaksmarter.net',
            'password' => Hash::make('admin')
        ]);

        //Asignamos el Rol de Admin al usuario administrador creado
        $admin->assignRole('admin');

        //Creamos el Usuario Editor
        $editor = User::create([ 
            'name' => 'editor',
            'email' => 'editor@speaksmarter.net',
            'password' => Hash::make('editor')
        ]);

        //Asignamos el Rol de Editor al usuario editor creado
        $editor->assignRole('editor');
    }
}