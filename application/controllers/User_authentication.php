<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_Authentication extends CI_Controller
{
    function __construct() {
		parent::__construct();
		
		// Load facebook library
		$this->load->library('facebook');
		
		//Load user model
		$this->load->model('user');
    }
    
    public function index(){
		$userData = array();
		// Check if user is logged in
		if($this->facebook->is_authenticated()){
			// Get user facebook profile details
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['fullname'] = $userProfile['first_name']." ".$userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
			$userData['address'] = "";
            $userData['contact'] = "";
            $userData['about'] = "";
            // Insert or update user data
            $userData['id']= $this->user->checkUser($userData);
			// Check user data insert or update status

            if(!empty($userData['id'])){
                $data['userData'] = $userData;
                $userData['user_type'] = "USER";
                $this->session->set_userdata($userData);

            if(isset($userData['id'])){
                $data['userData'] = $userData;

            } else {
               $data['userData'] = array();
            }
			// Get logout URL
			$data['logoutUrl'] = $this->facebook->logout_url();
		}else{
            $fbuser = '';
			// Get login URL
            $data['authUrl'] =  $this->facebook->login_url();
        }
		// Load login & profile view

		$this->load->view('user_authentication/index', $data);


        if(isset($userData['fullname'])){
                $userData['FULLNAME'] = $userData['fullname'];
                $userData['user_type'] = "USER";
                $userData['contact'] = $result->contact;
                $userData['about'] = $result->about;
                $userData['address'] = $result->address;
                $result = $this->user->getUserById($userData['id']);

                $this->session->set_userdata($userData);
                redirect('');
        }

    }

	public function logout() {
		// Remove local Facebook session
		$this->facebook->destroy_session();
		// Remove user data from session
		$this->session->sess_destroy();
		// Redirect to login page
        redirect('/user_authentication');
    }
}
