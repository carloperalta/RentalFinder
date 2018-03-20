<?php

class Home extends CI_Controller{
  private $data;
  function index(){
    $this->data = $this->session->userdata();
  	$this->master('home/index',$this->data);
  }

  public function Rent()
  {
    $this->load->view('posts/index');
  }
  public function contact_us()
  {
  	# code...
  }

  public function master($page,$data = null)
  {
    $this->load->view('Home/header', $data);
    $this->load->view($page, $data);
    $this->load->view('Home/footer', $data);
  }
}
