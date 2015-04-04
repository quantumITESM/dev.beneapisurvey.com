<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use SurveyBene\User;
use Illuminate\Support\Facades\DB;
use HttpResponse;

use Symfony\Component\HttpFoundation\Response;



class AuthenticateController extends Controller {

	public function signUp(Request $request)
	{
		$credentials = $request->only('email', 'password');


		try {

			$currentUser=DB::table('users')->whereEmail($credentials['email'])->first();

			if($currentUser){
				return response()->json(['message'=>'user not available']);
			}

			$user = User::create($credentials);
		} catch (Exception $e) {
			return response()->json(['error' => 'User already exists.'], HttpResponse::HTTP_CONFLICT);
		}

		$token = JWTAuth::fromUser($user);

		return response()->json(compact('token'));

	}

	public function signIn(Request $request)
	{
		$credentials = $request->only('email', 'password');
		try
		{
			if ( ! $token = JWTAuth::attempt($credentials)) {
				return response()->json(['message'=>'email or password not valid'],Response::HTTP_UNAUTHORIZED);//(false, HttpResponse::HTTP_UNAUTHORIZED);
			}
		}catch (JWTException $e){
			return response()->json(['error' => 'could_not_create_token'], 500);
		}


		return response()->json(compact('token'));


	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}