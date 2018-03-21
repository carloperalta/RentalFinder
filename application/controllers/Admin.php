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
		$this->master('Admin/Property_type',$this->data);
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


	function save(){
		$user = array(
			'fullname'=> $this->input->post('name'),
			'password'=> hash('tiger192,3',$this->input->post('password')),
			'email' => $this->input->post('email'),
			'user_type' => $this->input->post('usertype')
		);
        $data=$this->Users->insertUser($user);
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->Users->updateUser();
        echo json_encode($data);
    }

}

/* End of file Admin */
/* Location: ./application/controllers/Admin */