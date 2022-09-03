<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = ['nombre','apellido','email','clave','token'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	//Validacion de formulario
	public static $rules = array(
		'nombre'=>'required|alpha|min:2',
		'apellido'=>'required|alpha|min:2',
		'email'=>'required|email|unique:users',
		'clave'=>'required|alpha_num|between:6,15'
	);

}
