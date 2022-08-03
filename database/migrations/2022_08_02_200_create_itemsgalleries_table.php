<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsgalleriesTable extends Migration {

    public function down() {
        Schema::dropIfExists('itemsgalleries');
    }

    public function up() {
        Schema::create('itemsgalleries', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->integer('gallery_id')->unsigned();
			$table->foreign('gallery_id')->references('id')->on('galeries')->onDelete('restrict');

			$table->string('src', 255);
			$table->string('legend', 100)->nullable();
			$table->string('credit', 60)->nullable();
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
