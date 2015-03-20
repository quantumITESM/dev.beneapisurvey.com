<?php namespace SurveyBene;
/**
 * Created by PhpStorm.
 * User: quantumB
 * Date: 3/12/15
 * Time: 10:01 AM
 */

	use Illuminate\Database\Seeder;
	use Illuminate\Database\Eloquent\Model;
	use SurveyBene\QuestionType;

	class QuestionTypeSeeder extends Seeder{

		public function run(){
			QuestionType::unguard();

			QuestionType::create(['name'=>'Abierta',
				'description'=>'El usuario puede escribir su respuesta, ideal para respuestas cortas o valores numéricos',
				'hasChoices'=>0]);

			QuestionType::create(['name'=>'Si/No',
				'description'=>'Una pregunta de tipo cerrada dónde el usuario sólo podrá contestar SI o NO',
				'hasChoices'=>0]);

			QuestionType::create(['name'=>'Opción multiple',
				'description'=>'Se presentan al usuario una serie de opciones para que seleccione la o las respuestas que considere adecuadas',
				'hasChoices'=>1]);

		}
	}