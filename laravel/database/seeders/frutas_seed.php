<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 20; $i++) {
            DB::table('frutas')->insert([
                'nombre' => 'Fruta ' . $i,
                'descripcion' => 'Fruta' . $i,
                'precio' => $i * rand(0.00, 2.00),
                'fecha' => date('Y-m-d')
            ]);

            $this->command->info('La tabla de frutas ha sido rellenada');
        }
    }
}
