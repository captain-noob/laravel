<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date');
            $table->string('name');
            $table->biginteger('phone');
            $table->string('address');
            $table->string('email');
            $table->string('qualification');
            $table->string('branch');
            $table->integer('age');
            $table->string('contacted');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registerations');
    }
}
