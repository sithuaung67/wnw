<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositPointBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_point_balances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pid');
            $table->string('remark');
            $table->float('debit');
            $table->float('credit');
            $table->date('date');
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
        Schema::dropIfExists('deposit_point_balances');
    }
}
