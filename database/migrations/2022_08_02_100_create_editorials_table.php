<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorialsTable extends Migration {

    public function down() {
        Schema::dropIfExists('editorials');
    }

    public function up() {
        Schema::create('editorials', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('name', 50);
			$table->string('slug', 60);
			$table->integer('order')->default(100)->nullable();
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
