<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuestionTypesQuestionsRelationship extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('questions',function(Blueprint $table){
			$table->char('questionType_id',36)->nullable()->after('id');
			$table->foreign('questionType_id')->references('id')->on('question_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Scheme::table('questions',function(Blueprint $table){
			$table->dropForeign('questions_questiontype_id_foreign');
			$table->dropColumn('questionType_id');
		});
	}

}
