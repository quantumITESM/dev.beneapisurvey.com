<?php namespace SurveyBene;
/**
 * Created by PhpStorm.
 * User: quantumB
 * Date: 3/5/15
 * Time: 9:22 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use SurveyBene\User;

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		User::unguard();


		$faker = \Faker\Factory::create();
		foreach(range(1,4) as $index) {
			User::create([
				'name'=>$faker->name,
				'password'=>bcrypt($faker->sentence(10)),
				'email'=>$faker->email
			]);
		}

	}

}
