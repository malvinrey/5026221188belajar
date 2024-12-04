<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageCounterTable extends Migration
{
    public function up()
    {
        Schema::create('pagecounter', function (Blueprint $table) {
            $table->integer('id')->primary(); // Use an integer as primary key, not auto-incremented
            $table->integer('jumlah')->default(0); // Initial jumlah
        });

        // Create the initial record with id = 1 and jumlah = 0
        DB::table('pagecounter')->insert([
            'id' => 1,
            'jumlah' => 0
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('pagecounter');
    }
}
