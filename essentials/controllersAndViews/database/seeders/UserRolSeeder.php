<?php

namespace Database\Seeders;
use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserRolSeeder extends Seeder
{
    public function run()
    {
        // Obtener users y roles
        $user1 = User::where('name', 'Juan')->first();
        $user2 = User::where('name', 'Ana')->first();
        $user3 = User::where('name', 'daniel')->first();

        $rol1 = Rol::where('nombre', 'Administrador')->first();
        $rol2 = Rol::where('nombre', 'Profesor')->first();
        $rol3 = Rol::where('nombre', 'Alumno')->first();

        // Asociar roles a usuarios
        if ($user1 && $rol1) {
            $user1->roles()->attach($rol1->id);
        }

        if ($user2 && $rol3) {
            $user2->roles()->attach($rol3->id);
        }
        if ($user3 && $rol2) {
            $user3->roles()->attach($rol2->id);
        }
    }
}
