<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_survey', function(Blueprint $table)
		{
			$table->char('survey_id',36)->nullable(); //Add the column for survey's Id
			$table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade'); //make the relationship with survey

			$table->char('question_id',36)->nullable(); //Add  the column for question's Id
			$table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('surveys_questions');
	}

}
