<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu_items', function ($table) {
			$table->increments('id');
			$table->integer('menu_id')->unsigned();
			$table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
			$table->string('name',45);
			$table->integer('child_id')->default(null);
			$table->integer('child_type')->default(null);
			$table->integer('_order')->unsigned();
			$table->integer('linked_status')->default(0);
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
		Schema::drop('menu_items');
	}

}
