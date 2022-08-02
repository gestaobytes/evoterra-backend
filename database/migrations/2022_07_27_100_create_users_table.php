<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

    public function down() {
        Schema::dropIfExists('users');
    }

    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('fullname', 20);
			$table->string('email', 255);
			$table->boolean('status')->default(0);
			$table->string('password', 120);
             
            
             
        });
    }
}
