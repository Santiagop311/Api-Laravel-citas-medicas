<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AffiliatesSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        DB::table('affiliates')->insert([
            [
                'name' => 'Juan',
                'identification_type' => 'DNI',
                'identification_number' => '12345678',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'María',
                'identification_type' => 'Pasaporte',
                'identification_number' => 'A9876543',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Carlos',
                'identification_type' => 'DNI',
                'identification_number' => '87654321',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Ana',
                'identification_type' => 'Cédula',
                'identification_number' => '11223344',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Pedro',
                'identification_type' => 'DNI',
                'identification_number' => '99887766',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
