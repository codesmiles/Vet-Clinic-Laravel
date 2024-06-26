<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed');
            $table->string('photo')->nullable();
            $table->char('microchip_number', 10);
            $table->unsignedInteger('age')->nullable();
            $table->dateTime('date_of_birth')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->dateTime('date_of_adoption')->nullable();
            $table->enum('sex', ["male", "female", "harmaphrodite"]);
            $table->enum('status', ["alive", "dead", "neutered"])->default("alive");
            $table->enum('retainership_plan', ["bronze", "silver","gold", "custom"])->nullable();
            $table->enum('genus', ["canine", "feline", "caprine", "ovine", "equine", "bovine", "pisces", "oryctolagus"]);
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
        Schema::dropIfExists('pets');
    }
}
