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
			$table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('restrict');

			$table->string('name', 70)->nullable();
			$table->string('legend', 120)->nullable();
			$table->string('credit', 40)->nullable();
			$table->string('address', 120);
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
