<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	private $data;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('user_type') != 'ADMIN') {
      		redirect('');
    	}
    	$this->load->model('UserModel','Users');
    	$this->load->model('UnitModel','UNITS');
    	$this->load->model('UnitTypeModel','Unit_types');
    	$this->data =  $this->session->userdata();
	}

	public function adduser()
	{
		if($this->input->post('Confirm')){
          $this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]');
          $this->form_validation->set_rules('password', 'password', 'required|trim');
          $this->form_validation->set_rules('name', 'name', 'trim|required');
          $this->form_validation->set_rules('confirmpassword', 'confirmpassword', 'trim|required|matches[password]');

          $email = $this->input->post('email');
          $this->session->set_flashdata('message','<div class="alert alert-danger">'.$email.' was already taken</div>');
          if ($this->input->post('password') != $this->input->post('confirmpassword')) {
          $this->session->set_flashdata('message','<div class="alert alert-danger">Password not match</div>');
            # code...
          }
          if ($this->form_validation->run() == TRUE) {
              $user = array(
                'email' => $email,
                'password' => hash('tiger192,3',$this->input->post('password')),
                'user_type'=> $this->input->post('usertype'),
                'name'=> $this->input->post('name'),
              );
              $isRegistered = $this->Users->insertUser($user);
              
              $this->session->set_flashdata('message','<div class="alert alert-primary">Successfully Registered!</div>');
          }
      }
      redirect('Admin');
	}
	public function addPropertyType()
	{
		if ($this->input->post('Confirm')) {
			$type = $this->input->post('propertytype');
			$newPropertyType = array('type_name' => $type);
			$this->Unit_types->addModelType($newPropertyType);
			$this->session->set_flashdata('message', '
				<div class="alert alert-info">
					Succesfully Added!
				</div>

				');
			redirect('Admin/property');
		}
		redirect('Admin/property');
	}
	public function Users($id){
		$this->data['properties'] = $this->UNITS->getPropertiesById($id);
		$this->master('Admin/ViewUser',$this->data);
	}
	public function Property_type($type)
	{
		$this->data['properties'] = $this->UNITS->getPropertiesByType($type);
		$this->master('Admin/ViewUser',$this->data);
	}

	private function master($page,$data = null)
	{
		$this->load->view('admin/header', $data);
		$this->load->view($page, $data);
		$this->load->view('admin/footer', $data);
	}
	public function invoice()
	{
		$this->master('admin/invoice',$this->data);
	}

	public function index()
	{
		$this->data['users'] = $this->Users->getUserAndProperties();
  		$this->master('admin/users',$this->data);
	}
	public function property()
	{
		$this->data['unit_types'] = $this->Unit_types->getUnitTypeAndNumber();
		$this->master('admin/property',$this->data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
	public function view()
	{
		$this->master('admin/type');
	}

}

/* End of file Admin */
/* Location: ./application/controllers/Admin */