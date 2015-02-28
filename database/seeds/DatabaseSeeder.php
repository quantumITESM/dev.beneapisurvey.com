<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use SurveyBene\Survey;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		/*Survey::create([
			'title'=>'Encuesta de salida',
			'description'=>'Esta encuesta será aplicada a todos los pacientes'
		]);*/

		$faker = \Faker\Factory::create();
		foreach(range(1,5) as $index) {
			Survey::create([
				'title'=>$faker->sentence(10),
				'description'=>$faker->sentence(40)
			]);
		}

	}

}
