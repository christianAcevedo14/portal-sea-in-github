<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('portal')->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('title_id')->unsigned();
            $table->integer('programmatic_unit_id')->unsigned();
            $table->string('first_name');
            $table->string('initial')->nullable();
            $table->string('surname');
            $table->string('second_surname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password')->default(Hash::make('pagri'));
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('title_id')->references('id')->on('titles');
            $table->foreign('programmatic_unit_id')->references('id')->on('programmatic_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('portal')->dropIfExists('users');
    }
}
