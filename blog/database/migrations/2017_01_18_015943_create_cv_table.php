<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('sex')->nullable();
            $table->date('birthday')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('address',500)->nullable();
            $table->string('current_address',500)->nullable();
            $table->text('target')->nullable();
            $table->text('hobbies')->nullable();
            $table->text('other')->nullable();
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
        Schema::dropIfExists('cv');
    }
}
