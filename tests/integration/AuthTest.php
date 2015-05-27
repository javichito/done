<?php 

use Laracasts\TestDummy\Factory as TestDummy;

class AuthTest extends TestCase {

	/** @test */
	public function test_it_is_redirected_to_dashboard_after_log_in()
	{
		$user = TestDummy::create('App\User');

		$this->login($user->toArray());

		$this->onPage('/home');
	}

}
