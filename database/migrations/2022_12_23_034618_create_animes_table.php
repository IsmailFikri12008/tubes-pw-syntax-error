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
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->foreignId('genre_id');
            $table->String('judul');
            $table->String('slug')->unique();
            $table->String('tipe');
            $table->String('episode');
            $table->String('status');
            $table->String('rilis');
            $table->String('primer');
            $table->String('tayang');
            $table->String('produser');
            $table->String('lisensi');
            $table->String('studio');
            $table->String('sumber');
            $table->String('demografis');
            $table->String('durasi');
            $table->String('rating');
            $table->String('image')->nullable();
            $table->text('excerpt');
            $table->text('sinopsis');
            $table->boolean('is_rekomendasi')->default(false);
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('animes');
    }
};
