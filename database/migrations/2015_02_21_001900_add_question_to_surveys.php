<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuestionToSurveys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('questions', function(Blueprint $table){
			$table->integer('survey_id')->unsigned()->nullable()->after('id');
			$table->foreign('survey_id')->references('id')->on('surveys');
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
			$table->dropForeign('questions_surveys_id_foreign');
			$table->dropColumn('survey_id');
		});
	}

}
