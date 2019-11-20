<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilCountryInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fil_country_investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quantity');
            $table->string('amount');
            $table->unsignedBigInteger('fil_country_category_id');
            $table->foreign('fil_country_category_id')
                ->references('id')->on('fil_country_categories')
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
        Schema::dropIfExists('fil_country_investments');
    }
}
