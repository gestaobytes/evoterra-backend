<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriesTable extends Migration {

    public function down() {
        Schema::dropIfExists('galeries');
    }

    public function up() {
        Schema::create('galeries', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('name', 150);
			$table->char('type', 255)->default('F');
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
