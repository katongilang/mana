<?php
namespace App\Controllers;
use App\Models\All_model;

class Auth extends BaseController{
	protected $All_model;

	public function __construct()
	{
		$this->All_model = new All_model();
	}

	/*======================================================*/
	/*========================= ADMIN ======================*/
	/*======================================================*/
	public function login_admin(){
		if ($this->request->getVar('submit') == 'Submit'){
			$user = $this->request->getVar('username');
			$pass = $this->request->getVar('password');

			if($user=="admin" && $pass=="admin"){
				$datauser = [
					'username' => $user,
					'name' => 'Roronoa Zoro',
					'as' => 'Administrator',
					'status_login_manna' => TRUE
				];					
				session()->set($datauser);
				return redirect()->to('admin');
			}
			else {
				session()->setFlashdata('alert','Invalid Login username or password !');
				return redirect()->to($_SERVER['HTTP_REFERER']); // redirect back
			}
		}

		// jika sudah login
		if(session()->get('status_login_manna'))
			return redirect()->to('admin'); 
		else
			return view('login_v');
	}

	public function logout_admin(){
		session_destroy();
		return redirect()->to(base_url());
	}
}