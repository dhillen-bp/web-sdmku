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
        Schema::create('home_featured', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('featured_title');
            $table->text('featured_subtitle');
            $table->text('featured_image');
            $table->uuid('home_id');
            $table->foreign('home_id')->references('id')->on('home')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('home_featured');
    }
};
