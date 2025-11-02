<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TypesAppointmentsSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        DB::table('types_appointments')->insert([
            [
                'name' => 'Consulta General',
                'description' => 'Revisión médica general',
                'cost' => 50.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Odontología',
                'description' => 'Consulta dental y limpieza',
                'cost' => 80.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Pediatría',
                'description' => 'Atención médica para niños',
                'cost' => 60.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Dermatología',
                'description' => 'Cuidado de la piel',
                'cost' => 70.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Nutrición',
                'description' => 'Asesoría nutricional personalizada',
                'cost' => 40.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
