<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('cfc')->create('participants', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('last_name1');
            $table->string('last_name2')->nullable();

            $table->foreign('city_id')->references('id')->on('cities');

            $table->string('phone')->nullable();

            $table->date('dob');

            $table->foreign('scholarity_id')->refernces('id')->on('scholarities');
            $table->foreign('interest_area_id')->references('id')->on('interest_areas');
            $table->foreign('work_status_id')->references('id')->on('work_status');

            $table->string('gender');

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
        Schema::connection('cfc')->dropIfExists('participants');
    }
}
