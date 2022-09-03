<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index', compact('users'))->with('success','Usuario agregado');
		
	}
	public function create()
	{
		//
	}

	public function store()
	{

		$validator = Validator::make(Input::all(), User::$rules);
		
		$user = new User();
		$user->nombre = Input::get('nombre');
		$user->apellido = Input::get('apellido');
		$user->email = Input::get('email');
		$user->clave = Hash::make(Input::get('clave'));
		$user->token = '';
		$user->save();
		return Redirect::to('/users')->with('success','Usuario agregado');

	}
	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$user = User::find($id);
		return View::make('users.edit',compact('user'));
	}

	public function update($id)
	{
		$user = User::find($id);
		$user->nombre = Input::get('nombre');
		$user->apellido = Input::get('apellido');
		$user->email = Input::get('email');
		$user->clave = Hash::make(Input::get('clave'));
		$user->token = '';
		$user->save();
		return Redirect::to('/users');
	}

	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		return Redirect::to('/users');
	}


}
