<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionalTable extends Migration {

    public function down() {
        Schema::dropIfExists('institutional');
    }

    public function up() {
        Schema::create('institutional', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('mission', 1000);
			$table->string('vision', 1000);
			$table->string('values', 1000);
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
