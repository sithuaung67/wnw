<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pid');
            $table->string('member_name');
            $table->date('buy_date');
            $table->string('trip');
            $table->bigInteger('amount');
            $table->float('total_point');
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
        Schema::dropIfExists('my_packages');
    }
}
