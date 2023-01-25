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
        Schema::create('versenyek', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 150)->collation('utf8_hungarian_ci');
            $table->integer('kor')->default(10);
            $table->integer('hossz');
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
        Schema::dropIfExists('versenyek');
    }
};
