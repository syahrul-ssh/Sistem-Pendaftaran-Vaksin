<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelesaiVaksinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selesai_vaksins', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('jenis_vaksin');
            $table->string('nik');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('kode_unik')->unique();
            $table->time('jam');
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
        Schema::dropIfExists('selesai_vaksins');
    }
}