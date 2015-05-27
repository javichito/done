<?php namespace App\Http\Controllers;

use App\TodoList;
use App\Http\Requests;
use Illuminate\Auth\Guard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TodoListsController extends Controller {

	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;

		$this->middleware('auth');
	}

	public function show($id)
	{
		$list = TodoList::findOrFail($id);
		$lists = TodoList::whereUserId($this->auth->user()->id)->get();

		return view('todo_lists.show', compact('lists', 'list'));
	}

	public function create()
	{
		return view('todo_lists.new');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required'
		]);

		$list = TodoList::create([
			'user_id' => $this->auth->user()->id,
			'title' => $request->get('title')
		]);

		return redirect("lists/{$list->id}")->with('Your list has been created. Start doing!');
	}

}
