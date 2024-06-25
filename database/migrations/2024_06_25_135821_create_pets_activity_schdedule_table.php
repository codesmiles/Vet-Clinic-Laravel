<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsActivitySchdeduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_activity_schdedule', function (Blueprint $table) {
            $table->id();
            $table->dateTime("next_visit");
            $table->unsignedInteger("pet_id");
            $table->unsignedInteger("employee_id");
            $table->string("treatment_or_vaccinations");
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
        Schema::dropIfExists('pets_activity_schdedule');
    }
}
