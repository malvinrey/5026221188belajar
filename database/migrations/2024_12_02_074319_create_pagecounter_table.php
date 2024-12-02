<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagecounterTable extends Migration
{
    public function up()
    {
        Schema::create('pagecounter', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing ID
            $table->integer('jumlah')->default(0); // Field for counting visitors
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagecounter');
    }
}
