<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAantalReeksenToTableWedstrijden extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table(
			'wedstrijden', 
			function(Blueprint $table){
				$table->integer('aantal_reeksen')->unsigned()->default('2');
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
			'wedstrijden', 
			function(Blueprint $table){
				$table->dropColumn('aantal_reeksen');
			}
		);
	}

}
