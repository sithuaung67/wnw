<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectriciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricians', function (Blueprint $table) {
            $table->bigIncrements('electrician_id');
            $table->string('name');
            $table->string('job');
            $table->bigInteger('phone_number');
            $table->text('address');
            $table->string('nrc');
            $table->string('cover_profile');
            $table->string('total_point');
            $table->string('qr_number');
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
        Schema::dropIfExists('electricians');
    }
}
