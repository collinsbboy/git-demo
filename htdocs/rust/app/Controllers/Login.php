<?php namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{

	public function checkUser(){

		if ($this->request->getMethod() == 'post') {
				
			$rules = [
				'username' => 'required',
				'password' => 'required|validateMember[username, password]',
			];

			$errors = [
				'password' => ['validateMember' => 'Username or Password don\'t match']
			];

			if (!$this->validate($rules, $errors)) {

				$page_data['validation']  = $this->validator;
				
			}
			else
			{
				$model = new LoginModel();

				$user = $model->where('username', $this->request->getVar('username'))
											->first();

				$this->setUserSession($user);
				return redirect()->to('lecturer-dashboard/dashboard');

			}
		}

		$page_data['page_name'] = 'Login';
		$page_data['app_name'] = 'Rucst College University';
		$page_data['page_title'] = 'Login';


		return view('login', $page_data);

	}


	private function setUserSession($user){
		$data = [
			'account_type' => $user['account_type'],
			'class_id' => $user['class_id'],
			'user_id' => $user['user_table_id'],
			'isLoggedIn' => true,
		];
		session()->set($data);
		return true;
	}

	//--------------------------------------------------------------------

}
