<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHewanTable extends Migration
{
    public function up()
    {
        Schema::create('hewan', function (Blueprint $table) {
            $table->id('kodehewan'); // Auto-increment primary key
            $table->string('namahewan', 30);
            $table->integer('jumlahhewan');
            $table->char('tersedia', 1); // 'Y' or 'N'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hewan');
    }
}
