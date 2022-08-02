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

			$table->string('name', 100);
			$table->longText('bio')->nullable();
			$table->string('linkedin', 100)->nullable();
			$table->string('facebook', 100)->nullable();
			$table->string('twitter', 100)->nullable();
			$table->string('instagram', 100)->nullable();

            $table->timestamps();
			$table->softDeletes();

        });
    }
}
