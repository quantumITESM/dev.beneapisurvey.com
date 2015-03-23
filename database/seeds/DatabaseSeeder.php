<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use SurveyBene\Survey;
use SurveyBene\User;
use SurveyBene\QuestionType;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		QuestionType::truncate();
		QuestionType::unguard();

		Model::unguard();

		$this->call('\SurveyBene\QuestionTypeSeeder');
		$this->call('\SurveyBene\UserSeeder');

		/*$faker = \Faker\Factory::create();
		foreach(range(1,5) as $index) {
			Survey::create([
				'title'=>$faker->sentence(10),
				'description'=>$faker->sentence(40)
			]);
		}*/

	}

}
