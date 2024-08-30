<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{   
    public function run()
    {
        // Crea 10 usuarios de ejemplo
        // Empleado::factory()->count(10)->create();
        User::create([
            'name' => 'Juan',
            'telefono' => '35266531',
            'email' => 'juan.perez@example.com',
            'sexo' => 'M',
            'rol_id' => 1,  // Usar 'rol_id' en lugar de 'rol'
            'curso_id' => 1,  // Usar 'curso_id' en lugar de 'curso'
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Ana',
            'email' => 'ana.lopez@example.com',
            'sexo' => 'F',
            'rol_id' => 2,  // Usar 'rol_id' en lugar de 'rol'
            'curso_id' => 1,  // Usar 'curso_id' en lugar de 'curso'
            'password' => bcrypt('12345678'),
        ]);
    }
}
