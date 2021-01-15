<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatagajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datagajis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('datapegawai_id');
            $table->string('nama');
            $table->string('no_rek')->unique();
            $table->string('gaji_pokok');
            $table->string('jam_lembur');
            $table->string('uang_lembur');
            $table->string('tgl_transfer');
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
        Schema::dropIfExists('datagajis');
    }
}
