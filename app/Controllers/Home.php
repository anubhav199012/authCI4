<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Home extends BaseController
{

	public function index()
	{
		return view('welcome_message');
	}

	public function portal($referrer = null)
	{
		if (!empty($referrer)) {
            setcookie("referral_user", $referrer, time() + (60 * 24 * 60 * 60), "/");
        }
		return view('register');
	}

	public function dashboard()
	{
		if(!session('user_id')) return redirect()->route('loginForm');

		return view('dashboard');
	}

	public function activeMember(){
		if(!session('user_id')) return redirect()->route('loginForm');
       // echo session('referral_link');
		$referral_link = session('referral_link');
        $model = new UsersModel();
		
		$data=[
			'users' =>$model->get_allusers($referral_link),
		];

		//echo view('users/list_users', $data);

		return view('activeMember', $data);
	}

	/* public function inactiveMember(){
		if(!session('user_id')) return redirect()->route('loginForm');

		$model = new UsersModel();
		$data=[
			'users' =>$model->get_user(),
		];

		return view('activeMember');
	} */


	public function profile($user_id){
		if(!session('user_id')) return redirect()->route('loginForm');
		$model = new UsersModel();
		$data=[
			'user' =>$model->get_user($user_id),
		];

		//print_r($data);

		return view('profile',$data);
	}

	//--------------------------------------------------------------------

}
