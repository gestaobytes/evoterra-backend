<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Permission extends Seeder
{

    public function run()
    {
        if (DB::table('permissions')->get()->count() == 0) {
            DB::table('permissions')->insert([
                [
                    'uuid' => Str::uuid(),
                    'name' => 'super',
                    'description' => 'Perfil implantador Gestão Bytes.',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'admin',
                    'description' => 'Gerenciamento geral das funcionalidades do sistema.',
                ],

                [
                    'uuid' => Str::uuid(),
                    'name' => 'editorials',
                    'description' => 'Gerenciamento dos registros da tabela editorials',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'sitepages',
                    'description' => 'Gerenciamento dos registros da tabela sitepages',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'users',
                    'description' => 'Gerenciamento dos registros da tabela users',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'roles',
                    'description' => 'Gerenciamento dos registros da tabela roles',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'permissions',
                    'description' => 'Gerenciamento dos registros da tabela permissions',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'teams',
                    'description' => 'Gerenciamento dos registros da tabela teams',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'portifolios',
                    'description' => 'Gerenciamento dos registros da tabela portifolios',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'galleries',
                    'description' => 'Gerenciamento dos registros da tabela galleries',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'posts',
                    'description' => 'Gerenciamento dos registros da tabela posts',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'permission_role',
                    'description' => 'Gerenciamento dos registros da tabela permission_role',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'role_user',
                    'description' => 'Gerenciamento dos registros da tabela role_user',
                ],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'itemsgalleries',
                    'description' => 'Gerenciamento dos registros da tabela itemsgalleries',
                ],

            ]);
        } else {
            echo "\e[Permission não é uma tabela vazia. Não foi efetuado o Seed.";
        }
    }
}
