<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesIndicatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_indicated', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->enum('status', ['accepted','analysing', 'rejected']);
            $table->string('zip_code', 8);
            $table->string('street');
            $table->string('number');
            $table->string('address');
            $table->string('complement');
            $table->bigInteger('roles_id');
            $table->foreignId('users_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties_indicated');
    }
}
