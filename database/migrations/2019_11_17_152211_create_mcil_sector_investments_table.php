<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcilSectorInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcil_sector_investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quantity');
            $table->string('amount');
            $table->unsignedBigInteger('mcil_sector_category_id');
            $table->foreign('mcil_sector_category_id')
                ->references('id')->on('mcil_sector_categories')
                ->onDelete('cascade');
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
        Schema::dropIfExists('mcil_sector_investments');
    }
}
