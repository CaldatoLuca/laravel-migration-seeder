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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 30);
            $table->string('departure_station', 20);
            $table->string('arrival_station', 20);
            $table->time('departure_time', 4);
            $table->time('arrival_time', 4);
            $table->string('train_id', 50);
            $table->tinyInteger('number_of_carriages')->unsigned()->nullable();
            $table->boolean('on_time', 50);
            $table->boolean('cancelled', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
