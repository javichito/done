<?php namespace App\Http\Controllers;

use App\Item;
use App\TodoList;
use Illuminate\Auth\Guard;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	protected $auth;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;

		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = $this->auth->user();
		$lists = TodoList::whereUserId($this->auth->user()->id)->get();
		$items = Item::with(['todoList' => function($query) use($user)
		{

			$query->whereUserId($user->id);

		}])->orderBy('created_at', 'DESC')->limit(8)->get();

		return view('home', compact('lists', 'items'));
	}

}
