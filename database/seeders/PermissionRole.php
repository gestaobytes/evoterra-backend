<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PermissionRole extends Seeder
{
    public function run()
    {
        if (DB::table('permission_role')->get()->count() == 0) {
            DB::table('permission_role')->insert([
                [
                    'uuid' => Str::uuid(),
                    'role_id' => 1,
                    'permission_id' => 1,
                ],
            ]);
        } else {
            echo "\e[PermissionRole não é uma tabela vazia. Não foi efetuado o Seed.";
        }
    }
}
