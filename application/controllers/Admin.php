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
    	$this->data =  $this->session->userdata();
	}

	public function index()
	{
  		$this->load->view('admin/users');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}

}

/* End of file Admin */
/* Location: ./application/controllers/Admin */