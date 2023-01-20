<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatinapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawatinaps', function (Blueprint $table) {
            $table->id();
            $table->string('no_identitas')->nullable();
            $table->string('nama')->nullable();
            $table->string('phone')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('gender')->nullable();
            $table->string('nama_kmr')->nullable();
            $table->string('harga_kamar')->nullable();
            $table->string('gol_drh')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('warganegara')->nullable();
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
        Schema::dropIfExists('rawatinaps');
    }
}
