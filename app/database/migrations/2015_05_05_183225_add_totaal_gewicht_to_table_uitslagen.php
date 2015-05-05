<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTotaalGewichtToTableUitslagen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table(
			'uitslagen', 
			function(Blueprint $table) {
				$table->integer('totaal_gewicht')->unsigned()->default('0');
			}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table(
			'uitslagen', 
			function(Blueprint $table) {
				$table->dropColumn('totaal_gewicht');
			}
		);
	}

}
