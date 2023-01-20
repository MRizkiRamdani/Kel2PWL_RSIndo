<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekamedis', function (Blueprint $table) {
            $table->id();
            $table->string('no_identitas')->nullable();
            $table->string('nama')->nullable();
            $table->string('phone')->nullable();
            $table->string('alamat');
            $table->string('tanggal_lahir')->nullable();
            $table->string('gender')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('durasi')->nullable();
            $table->string('nama_kamar')->nullable();
            $table->string('harga_kamar')->nullable();
            $table->string('biaya_rawat')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('rekamedis');
    }
}
