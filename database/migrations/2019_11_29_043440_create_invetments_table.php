<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvetmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invetments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('main_category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->unsignedBigInteger('sub_data_category_id');
            $table->string('quantity');
            $table->string('amount');

            $table->foreign('main_category_id')
                  ->references('id')->on('main_categories')
                  ->onDelete('cascade');
            $table->foreign('sub_category_id')
                  ->references('id')->on('sub_categories')
                  ->onDelete('cascade');
            $table->foreign('sub_data_category_id')
                  ->references('id')->on('sub_data_categories')
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
        Schema::dropIfExists('invetments');
    }
}
