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
        Schema::create('school_profile', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('logo_label');
            $table->text('logo');

            $table->text('principal_foto');
            $table->string('principal_name')->nullable();
            $table->text('principal_text');

            $table->text('campus1');
            $table->text('campus2');

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
        Schema::dropIfExists('school_profile');
    }
};
