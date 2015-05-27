<?php

use Laracasts\TestDummy\Factory as TestDummy;

class TodoListItemTest extends TestCase {

	/** @test */
	public function it_adds_an_item_to_a_list()
	{
		$user = TestDummy::create('App\User');
		$list = TestDummy::create('App\TodoList', [
			'user_id' => $user->id
		]);

		$this->login($user->toArray());

		$this->visit("lists/{$list->id}")
			 ->fill('Foo', 'title')
			 ->press('')
			 ->onPage("lists/{$list->id}")
			 ->see('Foo')
			 ->seeInDatabase('items', [
			 	'list_id' => $list->id,
			 	'title' => 'Foo'
			 ]);
	}

}