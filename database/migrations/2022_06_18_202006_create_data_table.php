<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();

            $table->string('data_nama')->nullable();
            $table->string('data_telepon')->nullable();
            $table->string('data_nik')->nullable();
            $table->string('data_jeniskelamin')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data');
    }
}
