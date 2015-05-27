<?php namespace App\Http\Controllers;

use App\Item;
use App\TodoList;
use App\Http\Requests;
use Illuminate\Auth\Guard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ItemsController extends Controller {

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;

		$this->middleware('auth');
	}

	public function store(Request $request)
	{
		$list = TodoList::findOrFail($request->get('list_id'));

		$this->validate($request, [
			'title' => 'required|max:140',
			'list_id' => 'exists:lists,id,user_id,' . $this->auth->user()->id
		]);

		Item::create($request->all());

		return redirect("lists/{$list->id}");
	}

	public function update($id, Request $request)
	{
		$item = Item::findOrFail($id);

		$this->validate($request, ['title' => 'required|max:140']);

		$item->update($request->only('title'));

		return redirect()->back();
	}

	public function destroy($id)
	{
		$item = Item::findOrFail($id);

		$item->delete();

		return redirect()->back();
	}

}
