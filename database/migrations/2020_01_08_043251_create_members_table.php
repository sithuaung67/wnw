<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pid');
            $table->string('member_name');
            $table->string('ownership');
            $table->string('gender');
            $table->string('full_name');
            $table->date('birth_date');
            $table->string('email');
            $table->string('re_email');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('phone');
            $table->string('point_only');
            $table->string('point_dollar');
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
        Schema::dropIfExists('members');
    }
}
