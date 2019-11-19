<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSezSectorInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sez_sector_investments', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->unsignedBigInteger('sez_sector_category_id');
            $table->string('quantity');
            $table->string('amount');

            $table->foreign('sez_sector_category_id')
                  ->references('id')->on('sez_sector_categories')
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
        Schema::dropIfExists('sez_sector_investments');
    }
}
