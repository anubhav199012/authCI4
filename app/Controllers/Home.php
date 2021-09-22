<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Home extends BaseController
{

	public function __construct()
	{
		helper(["url"]);
	}

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

	public function editprofile(){
		if(!session('user_id')) return redirect()->route('loginForm');

		$userid=session('user_id');

		if ($this->request->getMethod() == "post") {

			$rules = [
				"fullname" => "required|min_length[4]",
			//	"email" => "required|valid_email",
				"mobile" => "required"
			];

			if (!$this->validate($rules)) {

				$response = [
					'success' => false,
					'msg' => "There are some validation errors",
				];

				return $this->response->setJSON($response);
			} else {

				$model = new UsersModel();

				$user_id = $this->request->getVar('userid');
				$data = [
					'name' => $this->request->getVar('fullname'),
					'email'  => $this->request->getVar('email'),
					'gender'  => $this->request->getVar('gender'),
					"mobile" => $this->request->getVar("mobile"),
					'country'  => $this->request->getVar('country'),
				];


				 if ($model->update($user_id,$data)) {

					$response = [
						'success' => true,
						'msg' => "User Profile Updated",
					];
				} else {
					$response = [
						'success' => true,
						'msg' => "Failed to update user",
					];
				} 

				return $this->response->setJSON($response);
			}
		}	
	}

	//--------------------------------------------------------------------

}
