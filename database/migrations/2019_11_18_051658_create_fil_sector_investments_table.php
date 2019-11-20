<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilSectorInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fil_sector_investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quantity');
            $table->string('amount');
            $table->unsignedBigInteger('fil_sector_category_id');
            $table->foreign('fil_sector_category_id')
                ->references('id')->on('fil_sector_categories')
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
        Schema::dropIfExists('fil_sector_investments');
    }
}
