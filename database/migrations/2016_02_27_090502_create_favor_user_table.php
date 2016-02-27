<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavorUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favor_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('favor_id')->unsiged();
            $table->integer('user_id_rebut')->unsiged();
            $table->integer('user_id_donant')->unsiged();
            $table->boolean('fet');
            $table->timestaps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('favor_users');
    }
}
