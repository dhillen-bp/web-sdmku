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
        Schema::create('footer', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('no_telp');
            $table->text('no_wa');
            $table->text('wa_jam_kerja');
            $table->text('alamat_kampus_1');
            $table->text('alamat_kampus_2');
            $table->text('social_facebook');
            $table->text('social_instagram');
            $table->text('social_tiktok');
            $table->text('social_youtube');

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
        Schema::dropIfExists('footer');
    }
};
