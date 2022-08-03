<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration {

    public function down() {
        Schema::dropIfExists('testimonials');
    }

    public function up() {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('client', 120);
			$table->string('company', 120)->nullable();
			$table->string('image', 150)->nullable();
			$table->string('text', 1000);
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
