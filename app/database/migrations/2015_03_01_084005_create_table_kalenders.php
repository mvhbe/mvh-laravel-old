<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKalenders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create(
	    	'kalenders',
	    	function($table) {
		        $table->increments('id');
		        $table->string('jaar', 4)->unique();
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
	public function down()
	{
		Schema::drop('kalenders');
	}

}

?>
