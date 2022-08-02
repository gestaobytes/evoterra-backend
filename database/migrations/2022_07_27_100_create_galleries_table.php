<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration {

    public function down() {
        Schema::dropIfExists('galleries');
    }

    public function up() {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->char('type', 1);
			$table->string('title', 150);
			$table->string('slug', 200);
			$table->boolean('exibetitle')->default(1);
             
            
             
        });
    }
}
