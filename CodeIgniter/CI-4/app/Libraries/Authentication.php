<?php

namespace App\Libraries;

class Authentication
{	

	function __construct()
	{
		$this->model = new \App\Models\UserModel;
	}

	public function login($email,$password)
	{
		$user = $this->model->findByEmail($email);

		if ($user == null) {
			return false;
		}
		if (!password_verify($password, $user['password_hash'])) {
			return false;
		}

		$session = session();
		$session->regenerate();
		$session_data = [
			'user_id'   => $user['id'],
			'username'  => $user['email'],
			'logged_in' => true,
		];

		$session->set($session_data);
		return true;
	}

	public function logout()
	{
		session()->destroy();
	}

	public function getCurretUser()
	{
		if (!$this->isLoggedIn()) {
			return null;
		}else{
			return $this->model->find(session()->get('user_id'));
		}
	}

	public function isLoggedIn()
	{
		return session()->get('logged_in');
	}
}