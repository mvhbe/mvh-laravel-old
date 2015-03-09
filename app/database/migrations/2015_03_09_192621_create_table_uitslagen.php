<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUitslagen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create(
			'uitslagen',
			function(Blueprint $table) {
				$table->increments('id');
				$table->integer('wedstrijd_id')->unsigned();
				$table->foreign('wedstrijd_id')->references('id')->on('wedstrijden');
				$table->integer('volgorde')->unsigned();
				$table->date('deelnemer');
				$table->integer('plaats1')->unsigned();
				$table->integer('gewicht1')->unsigned();
				$table->integer('plaats2')->unsigned();
				$table->integer('gewicht2')->unsigned();
				$table->integer('plaats3')->unsigned();
				$table->integer('gewicht3')->unsigned();
				$table->string('opmerkingen')->nullable();
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
