<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('autos')->insert([
            [
                'color' => 'Rojo',
                'modelo' => 2023,
                'tamano' => 'Grande',
                'numero_placa' => 'ABC-123',
                'precio' => 50000.00,
                'tipo' => 'deportivo',
                'marca' => 'Ferrari',
                'modelo_nombre' => 'F8 Tributo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'color' => 'Negro',
                'modelo' => 2021,
                'tamano' => 'Mediano',
                'numero_placa' => 'DEF-456',
                'precio' => 30000.00,
                'tipo' => 'formal',
                'marca' => 'BMW',
                'modelo_nombre' => 'Serie 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'color' => 'Blanco',
                'modelo' => 2022,
                'tamano' => 'Pequeño',
                'numero_placa' => 'GHI-789',
                'precio' => 20000.00,
                'tipo' => 'familiar',
                'marca' => 'Toyota',
                'modelo_nombre' => 'Corolla',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'color' => 'Azul',
                'modelo' => 2024,
                'tamano' => 'Grande',
                'numero_placa' => 'JKL-012',
                'precio' => 55000.00,
                'tipo' => 'deportivo',
                'marca' => 'Lamborghini',
                'modelo_nombre' => 'Huracán',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'color' => 'Gris',
                'modelo' => 2020,
                'tamano' => 'Mediano',
                'numero_placa' => 'MNO-345',
                'precio' => 35000.00,
                'tipo' => 'viaje',
                'marca' => 'Tesla',
                'modelo_nombre' => 'Model 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'color' => 'Verde',
                'modelo' => 2019,
                'tamano' => 'Grande',
                'numero_placa' => 'PQR-678',
                'precio' => 40000.00,
                'tipo' => 'familiar',
                'marca' => 'Ford',
                'modelo_nombre' => 'Explorer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
