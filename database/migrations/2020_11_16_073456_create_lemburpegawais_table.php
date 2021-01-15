<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLemburpegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lemburpegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('datapegawai_id');
            $table->string('nip')->unique();
            $table->string('nama');
            $table->string('no_rek')->unique();
            $table->string('jabatan');
            $table->string('gaji_pokok');
            $table->string('tgl_masuk');
            $table->string('jam_lembur');
            $table->string('uang_lembur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lemburpegawais');
    }
}
