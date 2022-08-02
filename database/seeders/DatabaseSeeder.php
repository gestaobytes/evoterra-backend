<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            User::class,
            Permission::class,
            Role::class,
            RoleUser::class,
            PermissionRole::class,
        ]);

        // \App\Models\Edition::factory(5)->create();
        // \App\Models\Favorite::factory(1)->create();

    }

}
