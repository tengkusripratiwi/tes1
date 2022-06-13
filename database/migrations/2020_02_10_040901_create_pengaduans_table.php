<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->unsignedInteger('masyarakat_id');
            $table->foreign('masyarakat_id')->references('id')->on('masyarakats')->onDelete('cascade');
            $table->string('isi_laporan');
            $table->string('foto');
            $table->enum('status',['0', 'proses', 'pengaduan']);
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
        Schema::dropIfExists('pengaduans');
    }
}
