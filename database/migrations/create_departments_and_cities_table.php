<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsAndCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('capital');
            $table->timestamps();
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('department_id')->unsigned();
            $table->string('name');
            $table->timestamps();

            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}