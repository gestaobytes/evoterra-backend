<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class User extends Seeder
{

    public function run()
    {
        if (DB::table('users')->get()->count() == 0) {
            DB::table('users')->insert([
                [
                    'uuid' => Str::uuid(),
                    'fullname' => 'Macedo',
                    'email' => 'super-admin@gestaobytes.com',
                    'status' => 1,
                    'password' => (new BcryptHasher)->make("vagrant"),
                ],
                [
                    'uuid' => Str::uuid(),
                    'fullname' => 'Venicius',
                    'email' => 'venicius@vbmarketing.com',
                    'status' => 1,
                    'password' => (new BcryptHasher)->make("vagrant"),
                ],
            ]);
        } else {
            echo "\e[User não é uma tabela vazia. Não foi efetuado o Seed.";
        }
    }
}
