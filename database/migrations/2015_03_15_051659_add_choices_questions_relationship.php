<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChoicesQuestionsRelationship extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('choices',function(Blueprint $table){
			$table->char('question_id',36)->nullable()->after('id');
			$table->foreign('question_id')->references('id')->on('questions');
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('choices',function(Blueprint $table){
			$table->dropForeign('choices_question_id_foreign');
			$table->dropColumn('question_id');
		});
	}

}
