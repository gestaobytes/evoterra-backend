<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration {

    public function down() {
        Schema::dropIfExists('roles');
    }

    public function up() {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();

			$table->string('name', 30);
			$table->string('description', 150);
        });
    }
}
