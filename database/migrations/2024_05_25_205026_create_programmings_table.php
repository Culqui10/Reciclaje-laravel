<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programmings', function (Blueprint $table) {
            //programaciones: hora inicial, hora final, dia, zona, ruta.
            $table->id();
            $table->date('startdate');
            $table->date('lastdate');
            $table->time('starttime');
            // $table->time('finalhour');
            //$table->unsignedBigInteger('route_id');
            //$table->foreign('route_id')->references('id')->on('routes');
            // $table->unsignedBigInteger('zone_id');
            // $table->foreign('zone_id')->references('id')->on('zones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmings');
    }
};
