<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('portal')->create('tutorial_sections', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tutorial_app_id')->unsigned();
            $table->foreign('tutorial_app_id')->references('id')->on('tutorial_apps');

            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('portal')->dropIfExists('tutorial_sections');
    }
}
