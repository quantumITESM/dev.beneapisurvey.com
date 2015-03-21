<?php namespace SurveyBene;
/**
 * Created by PhpStorm.
 * User: quantumB
 * Date: 3/20/15
 * Time: 1:59 PM
 */

use Rhumsaa\Uuid\Uuid;
use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Model;


/**
 * This is a great UUID generator package available on Composer
 * but you can generate your UUID however you see fit.
 */

class UuidModel extends Model{

	/**
	 * Indicates if the IDs are auto-incrementing.
	 *
	 * @var bool
	 */
	public $incrementing = false;

	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	protected static function boot()
	{
		parent::boot();

		/**
		 * Attach to the 'creating' Model Event to provide a UUID
		 * for the `id` field (provided by $model->getKeyName())
		 */
		static::creating(function ($model) {
			$model->{$model->getKeyName()} = (string)$model->generateNewId();
		});
	}

	/**
	 * Get a new version 4 (random) UUID.
	 *
	 * @return \Rhumsaa\Uuid\Uuid
	 */
	public function generateNewId()
	{
		return Uuid::uuid4();
	}

}