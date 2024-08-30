<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            CursoSeeder::class,
            ClaseSeeder::class,
            RolSeeder::class,
            UserSeeder::class,
            UserRolSeeder::class,            
        ]);
        User::factory()->create([
            'name' => 'daniel',
            'email' => 'test@example.com',
            'sexo' => 'F',
            'rol_id' => 1,  // Usar 'rot_id' en lugar de 'rol'
            'curso_id' => fake()->randomElement([1, 2,3]),
            'password' => bcrypt('12345678')
        ]);
    }
}
