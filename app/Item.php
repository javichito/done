<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $fillable = ['list_id', 'title', 'checked'];

	public function todoList()
	{
		return $this->belongsTo('App\TodoList', 'list_id');
	}

}
