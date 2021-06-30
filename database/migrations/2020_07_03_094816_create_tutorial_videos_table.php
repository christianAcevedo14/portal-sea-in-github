<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('portal')->create('tutorial_videos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tutorial_section_id')->unsigned();
            $table->foreign('tutorial_section_id')->references('id')->on('tutorial_sections');

            $table->string('title');
            $table->string('embed')->nullable();
            $table->string('url')->nullable();
            $table->string('description');
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
        Schema::connection('portal')->dropIfExists('tutorial_videos');
    }
}
