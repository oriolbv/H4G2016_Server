<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titol');
            $table->text('descripcio');
            $table->decimal('lat', 8, 2);
            $table->decimal('long', 8, 2);
            $table->boolean('demanar');
            $table->integer('user_id')->unsigned();
            $table->enum('categoria', [
                'vehiculos',
                'inmobiliaria',
                'hogar',
                'moda y belleza',
                'niños y bebés',
                'electrónica',
                'ocio y deportes',
                'mascotas y animales',
                'trabajo y formación',
                'negocios y servicios',
                'otros'
            ]);
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
        //
    }
}
