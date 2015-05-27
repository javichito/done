<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $fillable = ['list_id', 'title'];

	public function todo_list()
	{
		return $this->belongsTo('App\TodoList');
	}

}
