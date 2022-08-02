<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortifoliosTable extends Migration {

    public function down() {
        Schema::dropIfExists('portifolios');
    }

    public function up() {
        Schema::create('portifolios', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('clientname', 100);
			$table->string('titlework', 100);
			$table->longText('work');
			$table->string('link', 200)->nullable();
			$table->string('resume', 200);
			$table->string('city', 100)->nullable();
			$table->char('uf', 2)->nullable();
             
            
             
        });
    }
}
