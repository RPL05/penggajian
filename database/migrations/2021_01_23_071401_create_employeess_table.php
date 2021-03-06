<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeess', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip')->unique();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('gaji_pokok');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('tanggal_masuk');
            $table->string('agama');
            $table->string('jenis_Kelamin');
            $table->string('nomor_telepon');
            $table->string('alamat');
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
        Schema::dropIfExists('employeess');
    }
}
