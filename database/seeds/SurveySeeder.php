<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use SurveyBene\Survey;
class SurveySeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Survey::create([
			'title'=>'Encuesta de salida',
			'description'=>'Esta encuesta será aplicada a todos los pacientes'
		]);


	}

}
