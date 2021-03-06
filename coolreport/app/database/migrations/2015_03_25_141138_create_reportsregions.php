<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsRegions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reports_regions', function($table) 
		{
			// Keys
			$table->increments('id');
			$table->integer('report_id')->unsigned()->index();
			$table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');
			$table->integer('region_id')->unsigned()->index();
			$table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
							
			$table->timestamps();
			
			$table->softDeletes();
		});

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reports_regions');
	}

}