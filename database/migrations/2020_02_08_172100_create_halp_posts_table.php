<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHalpPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halp_posts', function (Blueprint $table) {
            $table->increments('id');
                $table->string('name');
            $table->string('gmail');
            $table->string('phone');
            $table->string('address');
            $table->string('present_address');
            $table->longText('desc_problem');
            $table->longText('say_about_yourself');
            $table->string('image');
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
        Schema::dropIfExists('halp_posts');
    }
}
