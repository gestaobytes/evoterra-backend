<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration {

    public function down() {
        Schema::dropIfExists('teams');
    }

    public function up() {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('name', 120);
			$table->string('image', 120)->nullable();
			$table->string('minibio', 500)->nullable();
			$table->string('instagram', 150)->nullable();
			$table->string('linkedin', 150)->nullable();
			$table->string('facebook', 150)->nullable();
			$table->string('twitter', 150)->nullable();
			$table->string('email', 150)->nullable();
			$table->char('cellphone', 15)->nullable();
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
