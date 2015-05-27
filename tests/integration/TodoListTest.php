<?php

use Laracasts\TestDummy\Factory as TestDummy;

class TodoListTest extends TestCase {

	/** @test */
	public function test_user_creates_a_todo_list()
	{
		$user = TestDummy::create('App\User');

		$this->login($user->toArray());

		$this->click('CREATE TODO LIST')
			 ->onPage('lists/new')
			 ->fill('Sample List', 'title')
			 ->press('Create List')
			 ->see('Sample List')
			 ->see('What\'s next?')
			 ->seeInDatabase('lists', [
			 	'user_id' => $user->id,
			 	'title' => 'Sample List'
			 ]);
	}

}