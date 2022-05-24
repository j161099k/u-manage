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
        Schema::create('schedule_weekday', function (Blueprint $table) {
            $table->foreignId('schedule_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('weekday_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_weekday');
    }
};
