<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration {

    public function down() {
        Schema::dropIfExists('abouts');
    }

    public function up() {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('title', 120);
			$table->string('image', 120)->nullable();
			$table->longText('text');
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
