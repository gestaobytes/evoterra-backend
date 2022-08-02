<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleUser extends Seeder
{
    public function run()
    {
        if (DB::table('role_user')->get()->count() == 0) {
            DB::table('role_user')->insert([
                [
                    'uuid' => Str::uuid(),
                    'user_id' => 1,
                    'role_id' => 1,
                ],
                [
                    'uuid' => Str::uuid(),
                    'user_id' => 2,
                    'role_id' => 1,
                ],
            ]);
        } else {
            echo "\e[RoleUser não é uma tabela vazia. Não foi efetuado o Seed.";
        }
    }
}
