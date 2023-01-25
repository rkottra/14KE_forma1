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
        Schema::create('eredmenyek', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pilotaId');
            $table->foreignId('versenyId');
            $table->time('futott', $precision = 0);
            $table->timestamps();
        });

        Schema::table('eredmenyek', function (Blueprint $table) {
            $table->foreign('pilotaId')->references('id')->on('pilotak');
            $table->foreign('versenyId')->references('id')->on('versenyek');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eredmenyek');
    }
};
