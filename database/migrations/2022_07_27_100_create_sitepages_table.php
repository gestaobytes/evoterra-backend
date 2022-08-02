<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitepagesTable extends Migration {

    public function down() {
        Schema::dropIfExists('sitepages');
    }

    public function up() {
        Schema::create('sitepages', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('title', 120);
			$table->string('slug', 140);
			$table->longText('text');
			$table->string('tags', 80);
			$table->string('image', 120)->nullable();
			$table->string('legend', 90)->nullable();
			$table->string('credit', 50)->nullable();
             
            
             
        });
    }
}
