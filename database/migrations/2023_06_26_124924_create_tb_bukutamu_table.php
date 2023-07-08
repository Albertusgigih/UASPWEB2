<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBukutamuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bukutamu', function (Blueprint $table) {
            $table->increments('id_tamu');
            $table->string('nim_tamu');
            $table->string('nama_tamu');
            
            $table->string('instansi');
            $table->string('jurusan_tamu');
            $table->date('tanggal_kunjung');
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
        Schema::dropIfExists('tb_bukutamu');
    }
}
