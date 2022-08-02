<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Role extends Seeder
{

    public function run()
    {
        if (DB::table('roles')->get()->count() == 0) {
            DB::table('roles')->insert([
                [
                    'uuid' => Str::uuid(),
                    'name' => 'super',
                    'description' => 'Perfil implantador Gestão Bytes.',
                ],
            ]);
        } else {
            echo "\e[Roles não é uma tabela vazia. Não foi efetuado o Seed.";
        }
    }
}
