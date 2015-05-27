<?php

use Laracasts\Integrated\Extensions\Laravel as IntegrationTest;

class TestCase extends IntegrationTest {

	/**
	 * Creates the application.
	 *
	 * @return \Illuminate\Foundation\Application
	 */
	public function createApplication()
	{
		$app = require __DIR__.'/../bootstrap/app.php';

		$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

		return $app;
	}

	public function login(array $overrides = [])
	{
		$defaults = [
			'email' => 'jh@mambo.pe',
			'password' => 'prueba123'
		];

		$user = array_merge($defaults, $overrides);

		$this->visit('auth/login')
			 ->type($user['email'], 'email')
			 ->type($user['password'], 'password')
			 ->press('Login');
	}

}
