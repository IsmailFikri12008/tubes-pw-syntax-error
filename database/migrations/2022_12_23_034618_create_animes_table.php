<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->String('Tipe');
            $table->String('Episode');
            $table->String('Status');
            $table->String('Rilis');
            $table->String('Primer');
            $table->String('Produser');
            $table->String('Lisensi');
            $table->String('Studio');
            $table->String('Sumber');
            $table->String('Genre');
            $table->String('Demografis');
            $table->String('Durasi');
            $table->String('Rating');
            $table->String('Gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
};
