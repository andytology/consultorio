<?php

namespace Database\Seeders;

use App\Models\Consultas as ConsultasModel;
use Illuminate\Database\Seeder;

class Consultas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConsultasModel::create([
            'nombre' => 'Juan Perez',
            'email' => 'juan@example.com',
            'telefono' => '1234567890',
            'mensaje' => 'Hola, me gustaría agendar una cita',
            'motivo_consulta' => 'Cita de revisión',
            'fecha_consulta' => '2024-08-29 18:25:14',
            'estado' => 1
        ]);
    }
}


