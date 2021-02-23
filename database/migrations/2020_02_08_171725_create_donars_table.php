<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gmail');
            $table->string('password');
            $table->string('phone');
            $table->string('address');
            $table->longText('desc');
            $table->string('image');
            $table->string('publication_status')->nullable();
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
        Schema::dropIfExists('donars');
    }
}
