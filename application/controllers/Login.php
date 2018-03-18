<?php

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
    $this->load->model('user');
    $this->load->library('facebook');
  }

  function index(){
      $this->form_validation->set_rules('email','email','required');
      $this->form_validation->set_rules('password','password','required');
     
     if ($this->form_validation->run() == TRUE) {
        $email = addslashes($this->input->post('email'));
        $password = hash('tiger192,3',$this->input->post('password'));
        $result = $this->UserModel->getUser($email,$password);
        if($result){
              $user = array(
                'id' => $result->id,
                'email'=> $result->email,
                'password' => $result->password,
                'user_type' => $result->user_type,
                'gender' => $result->gender,
                'address'=>$result->address,
                'about' => $result->about,
                'contact'=>$result->contact,
                'FULLNAME' => $result->name
              );
            $this->session->set_userdata($user);
            if($user['user_type'] == "ADMIN"){
              redirect('Admin');
            }else if($user['user_type'] == "USER"){
              redirect('');
            }
     }else{
          $this->session->set_flashdata('error','<div class="alert alert-danger">Email or Password is Incorrect.</div>');
      }
    }$userData = array();
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
      
            // Insert or update user data
            $userData['id']= $this->user->checkUser($userData);
      // Check user data insert or update status
            if(!empty($userData['id'])){
                $data['userData'] = $userData;

                $userData['user_type'] = "USER";
                $this->session->set_userdata($userData);

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




      $this->load->view('Home/login',$data);
}

}
