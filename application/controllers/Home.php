<?php

class Home extends CI_Controller{
  private $data;
  function index(){
    $this->data = $this->session->userdata();
  	$this->load->view('home/index',$this->data);
  }

  public function Rent()
  {
  }
  public function contact_us()
  {
  	# code...
  }
}
