<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWedstrijden extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create(
			'wedstrijden',
			function(Blueprint $table) {
				$table->increments('id');
				$table->integer('kalender_id')->unsigned();
				$table->foreign('kalender_id')->references('id')->on('kalenders');
				$table->date('datum')->unique();
				$table->string('omschrijving');
				$table->string('aanvang', 5)->default('13:30');
				$table->text('opmerkingen')->nullable();
				$table->timestamps();
			}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('wedstrijden');
	}

}
