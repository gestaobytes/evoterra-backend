<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {

    public function down() {
        Schema::dropIfExists('posts');
    }

    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->integer('editorial_id')->unsigned();
			$table->foreign('editorial_id')->references('id')->on('editorials')->onDelete('restrict');

			$table->string('intertitle', 40);
			$table->string('title', 120);
			$table->string('subtitle', 180)->nullable();
			$table->string('slug', 140);
			$table->longText('text');
			$table->string('tags', 80);
			$table->string('image', 120)->nullable();
			$table->string('legend', 90)->nullable();
			$table->string('credit', 50)->nullable();
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
