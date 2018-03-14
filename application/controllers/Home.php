<?php

class Home extends CI_Controller{

  function index(){
  	$this->load->view('home/index');
  }

  public function Rent()
  {
  	$this->load->view('admin/users');
  }
  public function contact_us()
  {
  	# code...
  }
}
