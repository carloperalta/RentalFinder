<?php

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('OwnerModel');
    $this->load->model('TenantModel');
    $this->load->model('UserModel');



    $this->load->model('user');
    $this->load->library('facebook');

  }

  function index(){

    if ($this->session->userdata()){
      if ($this->session->userdata('user_type') == 'OWNER') {
          redirect('Owner');
      }elseif ($this->session->userdata('user_type') == 'TENANT') {
        # code...
      }
    }

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == TRUE) {
        $username = addslashes($this->input->post('username'));
        $password = hash('tiger192,3',$this->input->post('password'));

        $result = $this->UserModel->getUser($username,$password);

        if ($result) {

              $user = array(
                'user_id' => $result->user_id,
                'username'=> $result->username,
                'password'=> $result->password,
                'user_type' => $result->user_type
              );

              $this->session->set_userdata($user);

            if($user['user_type'] == "TENANT"){
              
              $tenant = $this->TenantModel->getTenant($user['user_id']);
              $array = array(
                'Tenant_ID' => $tenant->Tenant_ID,
                'Tenant_FN' => $tenant->Tenant_FN,
                'Tenant_MI' => $tenant->Tenant_MI,
                'Tenant_LN' => $tenant->Tenant_LN,
                'Tenant_EMAIL' => $tenant->Tenant_EMAIL,
                'Tenant_CN' => $tenant->Tenant_CN,
                'Tenant_BirthDate' => $tenant->Tenant_BirthDate
              );
              
              $this->session->set_userdata( $array );
              redirect('Tenant',$array);

            }else if($user['user_type'] == 'OWNER'){
              $owner = $this->OwnerModel->getOwner($user['user_id']);
              $array = array(
                'Owner_ID' => $owner->Owner_ID,
                'FULLNAME' => $owner->Owner_FN ." ". substr($owner->Owner_MI, 0,1).". ".$owner->Owner_LN,
                'Owner_FN' => $owner->Owner_FN,
                'Owner_MI' => $owner->Owner_MI,
                'Owner_LN' => $owner->Owner_LN,
                'Owner_EMAIL' => $owner->Owner_EMAIL,
                'Owner_CN' => $owner->Owner_CN,
                'Owner_BirthDate' => $owner->Owner_BirthDate
              );
              $this->session->set_userdata($array);
              redirect('Owner',$array);
            }
        }else{
          $this->session->set_flashdata('error', 'Username or Password is incorrect');
        }

    }

    $userData = array();
    
                        // Check if user is logged in
                        if($this->facebook->is_authenticated()){
                          // Get user facebook profile details
                          $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

                                // Preparing data for database insertion
                                $userData['oauth_provider'] = 'facebook';
                                $userData['oauth_uid'] = $userProfile['id'];
                                $userData['first_name'] = $userProfile['first_name'];
                                $userData['last_name'] = $userProfile['last_name'];
                                $userData['email'] = $userProfile['email'];
                                $userData['gender'] = $userProfile['gender'];
                                $userData['locale'] = $userProfile['locale'];
                                $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
                                $userData['picture_url'] = $userProfile['picture']['data']['url'];
                          
                                // Insert or update user data
                                $userID = $this->user->checkUser($userData);
                          
                          // Check user data insert or update status
                                if(!empty($userID)){
                                    $data['userData'] = $userData;
                                    $this->session->set_userdata('userData',$userData);
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
                        
    $this->master('home/login',$data);
   
  }

  function master($page,$data=false){
    $this->load->view('home/header');
    $this->load->view($page,$data);
    $this->load->view('home/footer');

  }

}
