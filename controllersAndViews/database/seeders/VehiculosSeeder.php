<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehiculo::create([
            'placa' => 'ABC123',
            'modelo' => 'Toyota Corolla',
            'disponible' => true,
            'pico_y_placa' => false,
        ]);

        Vehiculo::create([
            'placa' => 'XYZ789',
            'modelo' => 'Honda Civic',
            'disponible' => false,
            'pico_y_placa' => true,
        ]);

        Vehiculo::create([
            'placa' => 'LMN456',
            'modelo' => 'Ford Fiesta',
            'disponible' => true,
            'pico_y_placa' => true,
        ]);
    }
}
