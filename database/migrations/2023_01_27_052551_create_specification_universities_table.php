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
        Schema::create('specification_universities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('city_id');
            $table->foreignId('ostan_id');
            $table->foreignId('University_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specification_universities');
    }
};
