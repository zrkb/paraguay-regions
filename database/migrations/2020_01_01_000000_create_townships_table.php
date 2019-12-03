<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTownshipsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{		
		Schema::create('townships', function (Blueprint $table) {
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
		Schema::dropIfExists('admins');
	}
}
