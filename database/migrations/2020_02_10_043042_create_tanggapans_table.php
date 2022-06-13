<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanggapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->unsignedInteger('pengaduan_id');
            $table->foreign('pengaduan_id')->references('id')->on('pengaduans')->onDelete('cascade');
            $table->unsignedInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('petugases')->onDelete('cascade');
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
        Schema::dropIfExists('tanggapans');
    }
}
