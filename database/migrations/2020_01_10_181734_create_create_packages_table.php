<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pid');
            $table->string('package_id');
            $table->string('package_name');
            $table->string('trip_title');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->string('package_img');
            $table->string('trip_date');
            $table->string('package_price');
            $table->string('point_only');
            $table->string('point_dollars');
            $table->string('buy_date');
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
        Schema::dropIfExists('create_packages');
    }
}
