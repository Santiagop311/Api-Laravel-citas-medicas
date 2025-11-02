<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'usuario'],
            ['name' => 'medico'],
            ['name' => 'secretario'],
            ['name' => 'administrador'],
            ['name' => 'superadmin'],
        ];

        DB::table('roles')->insert($roles);
    }

}
