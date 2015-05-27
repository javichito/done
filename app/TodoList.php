<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model {

	protected $table = 'lists';

	protected $fillable = ['user_id', 'title'];

	public function items()
	{
		return $this->hasMany('App\Item', 'list_id');
	}

}
