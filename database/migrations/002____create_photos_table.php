<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->text('description');
			$table->string('img');
			$table->date('photo_date');
			$table->boolean('featured');
			$table->unsignedBigInteger('album_id');
			$table->timestamps();

			$table->foreign('album_id')->references('id')->on('albums');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::enableForeignKeyConstraints();
		Schema::table('photos', function (Blueprint $table) {
			$table->dropForeign(['album_id']);
		});
		Schema::dropIfExists('photos');
		Schema::disableForeignKeyConstraints();
	}
}
