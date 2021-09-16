<?php namespace App\Controllers;

use App\Models\UsersModel;
use \CodeIgniter\Exceptions\PageNotFoundException;

class Auth extends BaseController
{
    public function index(){
        echo 'user is wroking..';
    }
    
    public function registrationForm(){
        if(session('user_id')) return redirect()->route('dashboard');

        return view('auth/register');
    }

    public function registerUser(){
        helper('text');
        if(previous_url() != base_url(route_to('registrationForm'))) {
            throw PageNotFoundException::forPageNotFound();
        }
        //trigger exception in a "try" block
        try {
            $model = new UsersModel();
            $ref_code = random_string('alnum', 6);
            $referred_by = null;
           // print_r($ref_code);
           // die();
            
            if (!$this->validate('registerRules')) {
                return redirect()->back()
                                 ->withInput()
                                 ->with('validation', $this->validator);
            }    

            if (isset($_COOKIE['referral_user'])) {
                    $referral_code = $_COOKIE['referral_user'];
                    $iResult = $model->validateReferral($referral_code);
                    if ($iResult) {
                        $referred_by = $referral_code;
                    }
            }
            
            $iInsertId = $model->save([
                'name' => trim($this->request->getVar('name')),
                'email' => trim($this->request->getVar('email')),
                'password' => trim($this->request->getVar('password')),
                'mobile' => trim($this->request->getVar('mobile')),
                'referral_link' => trim($ref_code),
                'referred_by' => $referred_by
            ]);
           // $data['aUserData'] = $this->profile_model->getProfileDetailsById($iInsertId);
            if ($iInsertId) {
                /* $to = $data['aUserData']['email'];
                if ($data['aUserData']['role_type'] == 2) { // 2: Publisher
                    $subject = "You Successfully Signed Up As An Affiliate";
                    $message = "Hello " . strtoupper($data['aUserData']['name']) . ". <br />Your affiliate account is successfully activated. <br /><br />Please login to your account by following details:- <br /> Login Username/Email : " . $data['aUserData']['email'] . " <br />Password : " . $password . ". <br /><br />
                    If you have an questions ask us at :- support@affsenseadnetwork.com
                    <br /><br />Thank you, <br />Affsense Ad Network";
                } */
                
                // $smtp = TRUE;
                // $mailStatus = sendMail($to, $subject, $message, $smtp);
                // Always set content-type when sending HTML email
                /* $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= 'From: support@affsenseads.com' . "\r\n" . 'CC: affsenseco@gmail.com';
                $data['message'] = $message;
                $body = $this->load->view('mail/email_template', $data, TRUE);
                $mailStatus = mail($to, $subject, $body, $headers);

                if ($mailStatus) {
                    if ($data['aUserData']['referred_by']) {
                        $reffered_by = getUserDetails($data['aUserData']['referred_by']);
                    }
                    $userType = (($data['aUserData']['role_type'] == 3) ? 'Advertiser' : 'Publisher');
                    // send mail to admin
                    $to = ADMIN_EMAIL;
                    $subject = "New " . $userType . " Signup to Affsense Ad Network.";
                    $message = "Hello Affsense Ad Network. <br/>Just a new " . $userType . " has just signed up. The following details are :- <br/>Joiner Name: " . strtoupper($data['aUserData']['name']) . "<br/> Joiner Email:" . $data['aUserData']['email'] . " <br/>Joiner Mobile No.:" . $data['aUserData']['mobile'] . "<br/> Referred by: " . (($data['aUserData']['referred_by']) ? strtoupper($reffered_by['name']) : 'N/A') . "<br/> Referred code: " . (($data['aUserData']['referred_by']) ? $data['aUserData']['referred_by'] : 'N/A') . ".<br/><br/>If you have any other questions ask us at :- support@affsenseadnetwork.com <br/>Thank you, <br/>Affsense Ad Network";
                    $data['message'] = $message;
                    $body = $this->load->view('mail/email_template', $data, TRUE);
                    $mailStatus = mail($to, $subject, $body, $headers);
                    if ($referral_code) {
                        $to = $reffered_by['email'];
                        $subject = "Congrats! You just got new referral.";
                        $message = "Hello " . (($data['aUserData']['referred_by']) ? strtoupper($reffered_by['name']) : '') . ". <br/>You just got new referral, Keep it up. The following details are :- <br/>Joiner Name: " . strtoupper($data['aUserData']['name']) . "<br/> Joiner Email:" . $data['aUserData']['email'] . " <br/>Joiner Mobile No.:" . $data['aUserData']['mobile'] . "<br/> Referred by: " . (($data['aUserData']['referred_by']) ? strtoupper($reffered_by['name']) : 'N/A') . "<br/> Referred code: " . (($data['aUserData']['referred_by']) ? $data['aUserData']['referred_by'] : 'N/A') . ".<br/><br/>If you have any other questions ask us at :- support@affsenseadnetwork.com <br/>Thank you, <br/>Affsense Ad Network";
                        $data['message'] = $message;
                        $body = $this->load->view('mail/email_template', $data, TRUE);
                        $mailStatus = mail($to, $subject, $body, $headers);
                    } 
                }*/
                session()->setFlashdata('success', 'Successful Registration');
                return redirect()->route('loginForm');
            }else{
                session()->setFlashdata('Failed', 'Registration Failed');
                return redirect()->route('registrationForm');
            }
        }//catch exception
        catch(Exception $e) {
            session()->setFlashdata('Failed', $e->getMessage());
            return redirect()->route('registrationForm');
        }
    }

    public function loginForm(){
        if(session('user_id')) return redirect()->route('dashboard');

        return view('auth/login');
    }

    public function loginUser(){
        if(previous_url() != base_url(route_to('loginForm'))) {
            throw PageNotFoundException::forPageNotFound();
        }

        if (!$this->validate('loginRules')) {
            return redirect()->back()
                             ->withInput()
                             ->with('validation', $this->validator);
        }

        $model = new UsersModel();

        $user = $model->where('email', $this->request->getVar('email'))
                      ->first();

        session()->set([
            'user_id' => $user->user_id,
            'name' => $user->name,
            'email' => $user->email,
            'role_type' => $user->role_type,
            'referral_link' => $user->referral_link,
        ]);

		return redirect()->route('dashboard');
    }

    public function logoutUser(){
        session()->destroy();

        return redirect()->route('loginForm');
    }
}
